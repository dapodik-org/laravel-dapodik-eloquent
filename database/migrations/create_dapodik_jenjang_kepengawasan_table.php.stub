<?php

use Dapodik\Laravel\Eloquent\Migration;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\JenjangKepengawasan;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration
{
    protected string $model = JenjangKepengawasan::class;

    public function up(): void
    {
        $this->createSchemaIfNotExist();

        $this->createTable(function (Blueprint $table) {
            $table->bigInteger('jenjang_kepengawasan_id')->primary();
            $table->string('nama');
            $table->boolean('jenjang_kepengawasan_tk');
            $table->boolean('jenjang_kepengawasan_sd');
            $table->boolean('jenjang_kepengawasan_smp');
            $table->boolean('jenjang_kepengawasan_sma');
            $table->boolean('jenjang_kepengawasan_smk');
            $table->boolean('jenjang_kepengawasan_slb');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        $this->dropTable();
    }
};
