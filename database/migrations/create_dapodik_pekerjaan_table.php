<?php

use Dapodik\Laravel\Eloquent\Migration;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\Pekerjaan;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration
{
    protected string $model = Pekerjaan::class;

    public function up(): void
    {
        $this->createSchemaIfNotExist();

        $this->createTable(function (Blueprint $table) {
            $table->bigInteger('pekerjaan_id')->primary();
            $table->string('nama')->nullable();
            $table->boolean('a_wirausaha')->default(false);
            $table->boolean('a_pejabat_publik')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        $this->dropTable();
    }
};
