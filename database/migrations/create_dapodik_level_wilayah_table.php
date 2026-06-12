<?php

use Dapodik\Laravel\Eloquent\Migration;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\LevelWilayah;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration
{
    protected string $model = LevelWilayah::class;

    public function up(): void
    {
        $this->createSchemaIfNotExist();

        $this->createTable(function (Blueprint $table) {
            $table->bigInteger('id_level_wilayah')->primary();
            $table->string('level_wilayah');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        $this->dropTable();
    }
};
