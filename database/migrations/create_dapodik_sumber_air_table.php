<?php

use Dapodik\Laravel\Eloquent\Migration;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\SumberAir;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration
{
    protected string $model = SumberAir::class;

    public function up(): void
    {
        $this->createSchemaIfNotExist();

        $this->createTable(function (Blueprint $table) {
            $table->bigInteger('sumber_air_id')->primary();
            $table->string('nama');
            $table->boolean('sumber_air')->nullable();
            $table->boolean('sumber_minum')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        $this->dropTable();
    }
};
