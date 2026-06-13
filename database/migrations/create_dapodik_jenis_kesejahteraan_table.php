<?php

use Dapodik\Laravel\Eloquent\Migration;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\JenisKesejahteraan;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration
{
    protected string $model = JenisKesejahteraan::class;

    public function up(): void
    {
        $this->createSchemaIfNotExist();

        $this->createTable(function (Blueprint $table) {
            $table->bigInteger('jenis_kesejahteraan_id')->primary();
            $table->string('nama');
            $table->string('penyelenggara');
            $table->boolean('u_ptk')->default(true);
            $table->boolean('u_pd')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        $this->dropTable();
    }
};
