<?php

use Dapodik\Laravel\Eloquent\Migration;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\KelompokBidang;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration
{
    protected string $model = KelompokBidang::class;

    public function up(): void
    {
        $this->createSchemaIfNotExist();

        $this->createTable(function (Blueprint $table) {
            $table->char('level_bidang_id', 5)->primary();
            $table->string('nama_level_bidang');
            $table->boolean('untuk_sma');
            $table->boolean('untuk_smk');
            $table->boolean('untuk_pt');
            $table->boolean('untuk_slb');
            $table->boolean('untuk_smklb');
            $table->char('level_bidang_induk', 5)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        $this->dropTable();
    }
};
