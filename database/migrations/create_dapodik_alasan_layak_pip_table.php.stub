<?php

use Dapodik\Laravel\Eloquent\Migration;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\AlasanLayakPip;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration
{
    protected string $model = AlasanLayakPip::class;

    public function up(): void
    {
        $this->createSchemaIfNotExist();

        $this->createTable(function (Blueprint $table) {
            $table->bigInteger('id_layak_pip')->primary();
            $table->string('alasan_layak_pip');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        $this->dropTable();
    }
};
