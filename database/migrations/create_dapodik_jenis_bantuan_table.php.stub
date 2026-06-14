<?php

use Dapodik\Laravel\Eloquent\Migration;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\JenisBantuan;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration
{
    protected string $model = JenisBantuan::class;

    public function up(): void
    {
        $this->createSchemaIfNotExist();

        $this->createTable(function (Blueprint $table) {
            $table->bigInteger('jenis_bantuan_id')->primary();
            $table->string('nama')->nullable();
            $table->boolean('untuk_sekolah');
            $table->boolean('untuk_pd');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        $this->dropTable();
    }
};
