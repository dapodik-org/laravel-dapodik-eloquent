<?php

namespace Dapodik\Laravel\Eloquent\Concerns;

use Dapodik\Laravel\Eloquent\Facades\Eloquent;
use Illuminate\Support\Str;

trait HasDriverConnection
{
    protected ?string $schema = null;

    public function getConnectionName(): string
    {
        if (! Eloquent::isMultiConnection()) {
            return $this->connection ?? config('database.default');
        }

        $parts = $this->getNamespaceParts();
        $folder = $parts['folder'];
        $driver = $parts['driver'];

        return $folder ? "{$driver}_{$folder}" : $driver;
    }

    public function getTable(): string
    {
        $prefix = Eloquent::getConfig()['prefix'] ?? null;
        $parts = $this->getNamespaceParts();

        $folder = $parts['folder'];
        $tableName = $parts['table'];

        if (Eloquent::isMultiConnection()) {
            if (Eloquent::getDriverName() === 'pgsql') {
                $this->setSchema($folder);
            }
        }

        $segments = array_filter([$prefix, $folder, $tableName]);

        return implode('_', $segments);
    }

    private function getNamespaceParts(): array
    {
        $afterModels = (string) str(__CLASS__)->after('Models\\Rest\\');

        if ($afterModels === (string) __CLASS__) {
            $afterModels = (string) str(__CLASS__)->after('Models\\Dapodik\\');
        }

        if ($afterModels === (string) __CLASS__) {
            return [
                'driver' => Eloquent::getDriverName(),
                'folder' => '',
                'table' => Str::snake(class_basename(__CLASS__)),
            ];
        }

        $parts = explode('\\', $afterModels);
        $snakeParts = array_map(fn ($part) => Str::snake($part), $parts);

        return [
            'driver' => Eloquent::getDriverName(),
            'folder' => $snakeParts[0],
            'table' => $snakeParts[1] ?? $snakeParts[0],
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
