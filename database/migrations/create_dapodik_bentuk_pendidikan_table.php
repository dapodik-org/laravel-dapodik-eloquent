<?php

use Dapodik\Laravel\Eloquent\Migration;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration {
    protected string $model = \Dapodik\Laravel\Eloquent\Models\Rest\Ref\BentukPendidikan::class;

    public function up(): void
    {
        $this->createSchemaIfNotExist();

        $this->createTable(function (Blueprint $table) {
            $table->bigInteger('bentuk_pendidikan_id')->primary();
            $table->string('nama');
            $table->boolean('jenjang_paud');
            $table->boolean('jenjang_tk');
            $table->boolean('jenjang_sd');
            $table->boolean('jenjang_smp');
            $table->boolean('jenjang_sma');
            $table->boolean('jenjang_tinggi');
            $table->string('direktorat_pembinaan')->nullable();
            $table->boolean('aktif');
            $table->char('formalitas_pendidikan',1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        $this->dropTable();
    }
};
