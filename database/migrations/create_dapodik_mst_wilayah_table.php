<?php

use Dapodik\Laravel\Eloquent\Migration;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\MstWilayah;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration
{
    protected string $model = MstWilayah::class;

    public function up(): void
    {
        $this->createSchemaIfNotExist();

        $this->createTable(function (Blueprint $table) {
            $table->char('kode_wilayah', 8)->primary();
            $table->string('nama');
            $table->bigInteger('id_level_wilayah');
            $table->char('mst_kode_wilayah', 8)->nullable();
            $table->char('negara_id', 2);
            $table->char('asal_wilayah', 8)->nullable();
            $table->char('kode_bps', 7)->nullable();
            $table->char('kode_dagri', 10)->nullable();
            $table->char('kode_keu', 10)->nullable();
            $table->char('id_prov', 8)->nullable();
            $table->char('id_kabkota', 8)->nullable();
            $table->char('id_kec', 8)->nullable();
            $table->boolean('a_desa')->default(false);
            $table->boolean('a_kelurahan')->default(false);
            $table->boolean('a_35')->default(false);
            $table->boolean('a_urban')->default(false);
            $table->bigInteger('kategori_desa_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        $this->dropTable();
    }
};
