<?php

use Dapodik\Laravel\Eloquent\Migration;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\SertifikasiIso;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration
{
    protected string $model = SertifikasiIso::class;

    public function up(): void
    {
        $this->createSchemaIfNotExist();

        $this->createTable(function (Blueprint $table) {
            $table->bigInteger('sertifikasi_iso_id')->primary();
            $table->string('nama');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        $this->dropTable();
    }
};
