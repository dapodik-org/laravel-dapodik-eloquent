<?php

use Dapodik\Laravel\Eloquent\Migration;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\JenisTest;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration
{
    protected string $model = JenisTest::class;

    public function up(): void
    {
        $this->createSchemaIfNotExist();

        $this->createTable(function (Blueprint $table) {
            $table->bigInteger('jenis_test_id')->primary();
            $table->string('jenis_test');
            $table->string('keterangan')->nullable();
            $table->decimal('nilai_maks', 6, 2);
            $table->string('ket_skor1')->nullable();
            $table->string('ket_skor2')->nullable();
            $table->string('ket_skor3')->nullable();
            $table->string('ket_skor4')->nullable();
            $table->string('ket_skor5')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        $this->dropTable();
    }
};
