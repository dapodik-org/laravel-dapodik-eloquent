<?php

use Dapodik\Laravel\Eloquent\Migration;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\Jurusan;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration
{
    protected string $model = Jurusan::class;

    public function up(): void
    {
        $this->createSchemaIfNotExist();

        $this->createTable(function (Blueprint $table) {
            $table->char('jurusan_id', 25)->primary();
            $table->string('nama_jurusan');
            $table->boolean('untuk_sma');
            $table->boolean('untuk_smk');
            $table->boolean('untuk_pt');
            $table->boolean('untuk_slb')->default(false);
            $table->boolean('untuk_smklb')->default(false);
            $table->bigInteger('jenjang_pendidikan_id')->nullable();
            $table->char('jurusan_induk', 25)->nullable();
            $table->char('level_bidang_id', 5)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        $this->dropTable();
    }
};
