<?php

use Dapodik\Laravel\Eloquent\Migration;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\GelarAkademik;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration
{
    protected string $model = GelarAkademik::class;

    public function up(): void
    {
        $this->createSchemaIfNotExist();

        $this->createTable(function (Blueprint $table) {
            $table->bigInteger('gelar_akademik_id')->primary();
            $table->string('kode');
            $table->string('nama');
            $table->decimal('posisi_gelar', 1, 0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        $this->dropTable();
    }
};
