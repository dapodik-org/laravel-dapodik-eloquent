<?php

use Dapodik\Laravel\Eloquent\Migration;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\JenisRombel;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration
{
    protected string $model = JenisRombel::class;

    public function up(): void
    {
        $this->createSchemaIfNotExist();

        $this->createTable(function (Blueprint $table) {
            $table->bigInteger('jenis_rombel')->primary();
            $table->string('nm_jenis_rombel');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        $this->dropTable();
    }
};
