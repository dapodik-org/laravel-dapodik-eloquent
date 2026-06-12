<?php

use Dapodik\Laravel\Eloquent\Migration;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration {
    protected string $model = \Dapodik\Laravel\Eloquent\Models\Rest\Ref\BidangStudi::class;

    public function up(): void
    {
        $this->createSchemaIfNotExist();

        $this->createTable(function (Blueprint $table) {
            $table->bigInteger('bidang_studi_id')->primary();
            $table->bigInteger('kelompok_bidang_studi_id')->nullable();
            $table->string('kode')->nullable();
            $table->string('bidang_studi');
            $table->boolean('kelompok');
            $table->boolean('jenjang_paud');
            $table->boolean('jenjang_tk');
            $table->boolean('jenjang_sd');
            $table->boolean('jenjang_smp');
            $table->boolean('jenjang_sma');
            $table->boolean('jenjang_tinggi');
            $table->boolean('a_sert_komp')->default(false);
            $table->boolean('a_sert_profesi')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        $this->dropTable();
    }
};
