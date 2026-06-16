<?php

use Dapodik\Laravel\Eloquent\Migration;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\MataPelajaran;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration
{
    protected string $model = MataPelajaran::class;

    public function up(): void
    {
        $this->createSchemaIfNotExist();

        $this->createTable(function (Blueprint $table) {
            $table->bigInteger('mata_pelajaran_id')->primary();
            $table->string('nama');
            $table->boolean('pilihan_sekolah');
            $table->boolean('pilihan_buku');
            $table->boolean('pilihan_kepengawasan');
            $table->boolean('pilihan_evaluasi');
            $table->char('jurusan_id', 25)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        $this->dropTable();
    }
};
