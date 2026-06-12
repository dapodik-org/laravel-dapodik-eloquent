<?php

use Dapodik\Laravel\Eloquent\Migration;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\AksesInternet;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration
{
    protected string $model = AksesInternet::class;

    public function up(): void
    {
        $this->createSchemaIfNotExist();

        $this->createTable(function (Blueprint $table) {
            $table->bigInteger('akses_internet_id')->primary();
            $table->string('nama');
            $table->boolean('media');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        $this->dropTable();
    }
};
