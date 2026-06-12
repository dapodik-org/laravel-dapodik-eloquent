<?php

use Dapodik\Laravel\Eloquent\Migration;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\Ekstrakurikuler;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration
{
    protected string $model = Ekstrakurikuler::class;

    public function up(): void
    {
        $this->createSchemaIfNotExist();

        $this->createTable(function (Blueprint $table) {
            $table->bigInteger('id_ekskul')->primary();
            $table->string('nm_ekskul');
            $table->boolean('u_sd')->default(false);
            $table->boolean('u_smp')->default(false);
            $table->boolean('u_sma')->default(false);
            $table->boolean('u_smk')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        $this->dropTable();
    }
};
