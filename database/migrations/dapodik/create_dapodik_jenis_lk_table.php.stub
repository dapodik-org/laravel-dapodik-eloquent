<?php

use Dapodik\Laravel\Eloquent\Migration;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\JenisLk;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration
{
    protected string $model = JenisLk::class;

    public function up(): void
    {
        $this->createSchemaIfNotExist();

        $this->createTable(function (Blueprint $table) {
            $table->char('id_jenis_lk', 6)->primary();
            $table->string('nm_jenis_lk');
            $table->string('ket_jenis_lk')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        $this->dropTable();
    }
};
