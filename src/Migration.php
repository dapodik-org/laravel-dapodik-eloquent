<?php

namespace Dapodik\Laravel\Eloquent;

use Dapodik\Laravel\Eloquent\Facades\Eloquent;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

abstract class Migration extends \Illuminate\Database\Migrations\Migration
{
    /**
     * The model class path associated with this migration.
     */
    protected string $model;

    /**
     * Get the connection name for the migration.
     */
    public function getConnection(): ?string
    {
        if (Eloquent::isMultiConnection()) {
            return app($this->model)->getConnectionName();
        }

        return parent::getConnection() ?? config('database.default');
    }

    /**
     * Create the PostgreSQL schema if it doesn't exist.
     */
    public function createSchemaIfNotExist(): void
    {
        if (Eloquent::isMultiConnection() && Eloquent::getDriverName() === 'pgsql') {
            // Retrieve schema via reflection helper or direct getter
            $schema = method_exists(app($this->model), 'getSchema')
                ? app($this->model)->getSchema()
                : null;

            if ($schema) {
                // Ensure we run the schema creation on the correct connection
                DB::connection($this->getConnection())->statement("CREATE SCHEMA IF NOT EXISTS {$schema}");
            }
        }
    }

    /**
     * Create the table using the dynamic connection.
     */
    public function createTable(\Closure $blueprint): void
    {
        // CRITICAL FIX: Target the dynamic connection explicitly
        Schema::connection($this->getConnection())->create($this->getTable(), function (Blueprint $table) use ($blueprint) {
            $blueprint($table);
        });
    }

    /**
     * Drop the table using the dynamic connection.
     */
    public function dropTable(): void
    {
        // CRITICAL FIX: Target the dynamic connection explicitly
        Schema::connection($this->getConnection())->dropIfExists($this->getTable());
    }

    /**
     * Get the resolved table name.
     */
    public function getTable(): string
    {
        return app($this->model)->getTable();
    }
}
