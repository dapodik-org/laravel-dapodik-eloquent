<?php

use Dapodik\Laravel\Eloquent\Migration;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\Negara;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration
{
    protected string $model = Negara::class;

    public function up(): void
    {
        $this->createSchemaIfNotExist();

        $this->createTable(function (Blueprint $table) {
            $table->char('negara_id', 2)->primary();
            $table->string('nama');
            $table->boolean('luar_negeri');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        $this->dropTable();
    }
};
