<?php

use Dapodik\Laravel\Eloquent\Migration;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\JenisPtk;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration
{
    protected string $model = JenisPtk::class;

    public function up(): void
    {
        $this->createSchemaIfNotExist();

        $this->createTable(function (Blueprint $table) {
            $table->bigInteger('jenis_ptk_id')->primary();
            $table->string('jenis_ptk');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        $this->dropTable();
    }
};
