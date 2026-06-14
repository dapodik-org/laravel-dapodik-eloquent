<?php

namespace Dapodik\Laravel\Eloquent\Concerns;

use Dapodik\Laravel\Eloquent\Facades\Eloquent;
use Illuminate\Support\Str;

trait HasDriverConnection
{
    protected ?string $schema = null;

    /**
     * Get the connection name for the model.
     */
    public function getConnectionName(): string
    {
        // If multi-connection is disabled, fall back to Laravel's default connection
        if (! Eloquent::isMultiConnection()) {
            return $this->connection ?? config('database.default');
        }

        $parts = $this->getNamespaceParts();
        $folder = $parts['folder'];
        $driver = $parts['driver'];

        // The top-level folder under Models\Rest\ dictates the connection name
        return "{$driver}_{$folder}";
    }

    /**
     * Get the table name for the model.
     */
    public function getTable(): string
    {
        $prefix = Eloquent::getConfig()['prefix'] ?? null;
        $parts = $this->getNamespaceParts();

        $folder = $parts['folder'];
        $tableName = $parts['table'];

        if (Eloquent::isMultiConnection()) {
            $driver = $parts['driver'];

            if ($driver === 'pgsql') {
                $this->setSchema($folder);

                return $prefix
                    ? "{$prefix}_{$folder}_{$tableName}"
                    : "{$folder}_{$tableName}";
            }

            if ($driver === 'mysql') {
                return $prefix
                    ? "{$prefix}_{$folder}_{$tableName}"
                    : "{$folder}_{$tableName}";
            }
        }

        return $prefix
            ? "{$prefix}_{$folder}_{$tableName}"
            : "{$folder}_{$tableName}";
    }

    /**
     * Helper to extract and format namespace parts.
     */
    private function getNamespaceParts(): array
    {
        // Try to extract namespace after Models\Rest\ (original location)
        $afterModels = (string) str(__CLASS__)->after('Models\\Rest\\');
        
        // If not found (model is published), try Models\Dapodik\ (published location)
        if ($afterModels === (string) __CLASS__) {
            $afterModels = (string) str(__CLASS__)->after('Models\\Dapodik\\Rest\\');
        }
        
        $parts = explode('\\', $afterModels);
        $snakeParts = array_map(fn ($part) => Str::snake($part), $parts);

        $folder = $snakeParts[0];

        $driver = Eloquent::getDriverName();

        return [
            'driver' => $driver,
            'folder' => $folder,
            'table' => $snakeParts[1] ?? $folder,
        ];
    }

    public function getSchema(): ?string
    {
        $this->getTable();

        return $this->schema;
    }

    public function setSchema(string $schema): void
    {
        $this->schema = $schema;
    }

    public function getGuarded(): array
    {
        return [];
    }
}
