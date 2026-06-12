<?php

use Dapodik\Laravel\Eloquent\Migration;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration {
    protected string $model = \Dapodik\Laravel\Eloquent\Models\Rest\Ref\BentukLembaga::class;

    public function up(): void
    {
        $this->createSchemaIfNotExist();

        $this->createTable(function (Blueprint $table) {
            $table->bigInteger('bentuk_lembaga_id')->primary();
            $table->string('nama');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        $this->dropTable();
    }
};
