<?php

use Dapodik\Laravel\Eloquent\Migration;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\KelompokUsaha;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration
{
    protected string $model = KelompokUsaha::class;

    public function up(): void
    {
        $this->createSchemaIfNotExist();

        $this->createTable(function (Blueprint $table) {
            $table->char('kelompok_usaha_id', 8)->primary();
            $table->string('nama_kelompok_usaha');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        $this->dropTable();
    }
};
