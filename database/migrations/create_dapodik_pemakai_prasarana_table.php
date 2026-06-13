<?php

use Dapodik\Laravel\Eloquent\Migration;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\PemakaiPrasarana;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration
{
    protected string $model = PemakaiPrasarana::class;

    public function up(): void
    {
        $this->createSchemaIfNotExist();

        $this->createTable(function (Blueprint $table) {
            $table->bigInteger('jenis_prasarana_id');
            $table->char('jurusan_id', 25);
            $table->integer('jml_std_min')->default(0);
            $table->timestamps();
            $table->softDeletes();

            $table->primary(['jenis_prasarana_id', 'jurusan_id']);
        });
    }

    public function down(): void
    {
        $this->dropTable();
    }
};
