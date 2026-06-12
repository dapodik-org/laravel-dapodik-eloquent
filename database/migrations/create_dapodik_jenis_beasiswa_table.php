<?php

use Dapodik\Laravel\Eloquent\Migration;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\JenisBeasiswa;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration
{
    protected string $model = JenisBeasiswa::class;

    public function up(): void
    {
        $this->createSchemaIfNotExist();

        $this->createTable(function (Blueprint $table) {
            $table->bigInteger('jenis_beasiswa_id')->primary();
            $table->bigInteger('sumber_dana_id');
            $table->string('nama');
            $table->boolean('untuk_pd');
            $table->boolean('untuk_ptk');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        $this->dropTable();
    }
};
