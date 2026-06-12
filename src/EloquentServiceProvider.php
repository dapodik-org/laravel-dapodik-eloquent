<?php

namespace Dapodik\Laravel\Eloquent;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class EloquentServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-dapodik-eloquent')
            ->hasConfigFile()
            ->hasMigrations([
                'create_dapodik_level_wilayah_table',
                'create_dapodik_negara_table',
                'create_dapodik_kategori_desa_table',
                'create_dapodik_mst_wilayah_table',
                'create_dapodik_agama_table',
                'create_dapodik_akreditasi_table',
                'create_dapodik_akses_internet_table',
                'create_dapodik_alasan_layak_pip_table',
                'create_dapodik_alat_transportasi_table',
                'create_dapodik_bank_table',
                'create_dapodik_bentuk_lembaga_table',
                'create_dapodik_bentuk_pendidikan_table',
                'create_dapodik_bidang_studi_table',
                'create_dapodik_bidang_usaha_table',
                'create_dapodik_ekstrakurikuler_table',
                'create_dapodik_errortype_table',
                'create_dapodik_fasilitas_layanan_table',
                'create_dapodik_gelar_akademik_table',
                'create_dapodik_jabatan_fungsional_table',
                'create_dapodik_jenis_ptk_table',
                'create_dapodik_jabatan_ptk_table',
                'create_dapodik_jabatan_tugas_ptk_table',
                'create_dapodik_jadwal_paud_table',
                'create_dapodik_jenis_akt_pd_table',
                'create_dapodik_jenis_aktivitas_kepanitiaan_table',
                'create_dapodik_jenis_bantuan_table',
                'create_dapodik_sumber_dana_table',
                'create_dapodik_jenis_beasiswa_table',
                'create_dapodik_jenis_cita_table',
            ]);
    }

    public function registeringPackage(): void
    {
        $this->app->singleton('dapodik-eloquent', function ($app) {
            return new Manager($app);
        });
    }

    public function bootingPackage(): void
    {
        app('dapodik-eloquent');
    }
}
