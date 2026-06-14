<?php

use Dapodik\Laravel\Eloquent\Migration;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\Semester;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration
{
    protected string $model = Semester::class;

    public function up(): void
    {
        $this->createSchemaIfNotExist();

        $this->createTable(function (Blueprint $table) {
            $table->char('semester_id', 5)->primary();
            $table->bigInteger('tahun_ajaran_id');
            $table->string('nama');
            $table->decimal('semester', 1, 0);
            $table->boolean('periode_aktif');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        $this->dropTable();
    }
};
