<?php

use Dapodik\Laravel\Eloquent\Migration;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration {
    protected string $model = \Dapodik\Laravel\Eloquent\Models\Rest\Ref\Bank::class;

    public function up(): void
    {
        $this->createSchemaIfNotExist();

        $this->createTable(function (Blueprint $table) {
            $table->char('id_bank', 3)->primary();
            $table->string('nm_bank');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        $this->dropTable();
    }
};
