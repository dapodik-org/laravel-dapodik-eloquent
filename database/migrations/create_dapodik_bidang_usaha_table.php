<?php

use Dapodik\Laravel\Eloquent\Migration;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration {
    protected string $model = \Dapodik\Laravel\Eloquent\Models\Rest\Ref\BidangUsaha::class;

    public function up(): void
    {
        $this->createSchemaIfNotExist();

        $this->createTable(function (Blueprint $table) {
            $table->char('bidang_usaha_id', 10)->primary();
            $table->string('nama_bidang_usaha');
            $table->string('level_bidang_usaha')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        $this->dropTable();
    }
};
