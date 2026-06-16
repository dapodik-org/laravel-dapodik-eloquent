<?php

namespace Dapodik\Laravel\Eloquent;

use Illuminate\Foundation\Application;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use Illuminate\Support\Traits\Macroable;
use InvalidArgumentException;

class EloquentManager
{
    use Macroable {
        __call as macroCall;
    }

    protected Application $laravel;

    protected array $config;

    protected string $driver;

    protected array $connections;

    public function __construct(Application $laravel)
    {
        $this->laravel = $laravel;
        $this->config = $this->getConfig();
        $this->driver = $this->getDriverName();

        $this->createConnections($this->isMultiConnection());
    }

    private function createConnections(bool $isMultiConnection): void
    {
        if (! $isMultiConnection) {
            return;
        }

        // Define your base connection template name (e.g., 'dapodik' or 'mysql')
        $baseConnection = $this->getConnectionName();
        $baseConfig = Config::get("database.connections.{$baseConnection}");

        if (! $baseConfig) {
            throw new \RuntimeException("Base database connection '{$baseConnection}' configuration not found.");
        }

        $paths = File::directories(__DIR__.'/Models/Rest');
        $directoryNames = array_map(fn ($path) => Str::snake(basename($path)), $paths);

        foreach ($directoryNames as $directoryName) {
            $newConnectionName = "{$baseConnection}_{$directoryName}";

            $this->setConnections($newConnectionName);

            // 1. Clone the base configuration template
            Config::set("database.connections.{$newConnectionName}", $baseConfig);

            // 2. Adjust per-driver specifications dynamically
            switch ($this->getDriverName()) {
                case 'pgsql':
                    // For PostgreSQL: Route to the specific schema namespace
                    Config::set("database.connections.{$newConnectionName}.search_path", $directoryName);
                    break;

                case 'mysql':
                    // For MySQL: Route to a suffixed separate database name
                    $currentDb = $baseConfig['database'] ?? '';
                    Config::set("database.connections.{$newConnectionName}.database", "{$currentDb}_{$directoryName}");
                    break;

                case 'sqlite':
                    // For SQLite: Keep absolute path structure intact
                    $currentDbPath = $baseConfig['database'] ?? '';
                    if ($currentDbPath !== ':memory:') {
                        $directory = dirname($currentDbPath);
                        $pathInfo = pathinfo($currentDbPath);

                        $newPath = $directory.DIRECTORY_SEPARATOR.$pathInfo['filename'].'_'.$directoryName.'.'.($pathInfo['extension'] ?? 'sqlite');

                        // --- Create the file if it does not exist ---
                        if (! file_exists($newPath)) {
                            // Ensure the parent directory exists first
                            if (! is_dir($directory)) {
                                mkdir($directory, 0755, true);
                            }
                            touch($newPath); // Creates an empty .sqlite file
                        }
                        // ---------------------------------------------------------

                        Config::set("database.connections.{$newConnectionName}.database", $newPath);
                    }
                    break;
            }
        }
    }

    public function isMultiConnection(): bool
    {
        return $this->config['multi_connection'];
    }

    public function getDriverName(): string
    {
        $driver = Schema::getConnection()->getDriverName();
        if (! in_array($driver, $this->supportedDrivers(), true)) {
            throw new InvalidArgumentException(
                "The database driver '{$driver}' is not supported. Supported drivers are: ".implode(', ', $this->supportedDrivers())
            );
        }

        return $driver;
    }

    protected function supportedDrivers(): array
    {
        return ['mysql', 'pgsql', 'sqlite'];
    }

    public function getConnectionName(): string
    {
        return Schema::getConnection()->getName();
    }

    public function getConfig(): array
    {
        $config = $this->laravel['config']['dapodik-eloquent'];

        $type = [
            'prefix' => 'null|string',
            'suffix' => 'null|string',
            'multi_connection' => 'boolean',
            'models' => 'array',
        ];

        return $this->validateConfig($config, $type);
    }

    /**
     * Validate configuration types dynamically.
     *
     * @throws InvalidArgumentException
     */
    private function validateConfig(array $config, array $type): array
    {
        foreach ($type as $key => $expectedTypes) {
            // 1. Check if the configuration key exists
            if (! array_key_exists($key, $config)) {
                throw new InvalidArgumentException("Missing required configuration key: '{$key}'");
            }

            $value = $config[$key];
            $currentType = gettype($value);

            // Normalize PHP's gettype() outputs to match your definition
            if ($currentType === 'NULL') {
                $currentType = 'null';
            }
            if ($currentType === 'integer') {
                $currentType = 'int'; // Optional, if you use 'int' later
            }

            // 2. Split pipe-separated types (e.g., 'null|string')
            $allowedTypes = explode('|', $expectedTypes);

            // 3. Validate current type against allowed types
            if (! in_array($currentType, $allowedTypes)) {
                throw new InvalidArgumentException(
                    "Invalid config type for '{$key}'. Expected '{$expectedTypes}', got '{$currentType}'."
                );
            }
        }

        return $config;
    }

    public function getConnections(): array
    {
        return $this->connections;
    }

    private function setConnections(string $connection): void
    {
        $this->connections[] = $connection;
    }

    public function getModels(): array
    {
        return $this->get('models');
    }

    public function getModel(string $model): string|array|null
    {
        return $this->get("models.{$model}");
    }

    /**
     * Get many configuration values.
     *
     * @param  array<string|int,mixed>  $keys
     * @return array<string,mixed>
     */
    private function getMany(array $keys): array
    {
        $config = [];

        foreach ($keys as $key => $default) {
            if (is_numeric($key)) {
                [$key, $default] = [$default, null];
            }

            $config[$key] = Arr::get($this->config, $key, $default);
        }

        return $config;
    }

    /**
     * Get the specified configuration value.
     */
    private function get(array|string $key, mixed $default = null): mixed
    {
        if (is_array($key)) {
            return $this->getMany($key);
        }

        return Arr::get($this->config, $key, $default);
    }
}
