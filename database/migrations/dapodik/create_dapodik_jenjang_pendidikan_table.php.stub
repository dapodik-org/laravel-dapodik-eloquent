<?php

use Dapodik\Laravel\Eloquent\Migration;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\JenjangPendidikan;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration
{
    protected string $model = JenjangPendidikan::class;

    public function up(): void
    {
        $this->createSchemaIfNotExist();

        $this->createTable(function (Blueprint $table) {
            $table->bigInteger('jenjang_pendidikan_id')->primary();
            $table->string('nama');
            $table->boolean('jenjang_lembaga');
            $table->boolean('jenjang_orang');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        $this->dropTable();
    }
};
