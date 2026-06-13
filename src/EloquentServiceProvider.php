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
                'create_dapodik_jenis_diklat_table',
                'create_dapodik_jenis_gugus_table',
                'create_dapodik_jenis_hapus_buku_table',
                'create_dapodik_jenis_hobby_table',
                'create_dapodik_jenis_ijazah_table',
                'create_dapodik_jenis_keluar_table',
                'create_dapodik_jenis_kepanitiaan_table',
                'create_dapodik_jenis_kerusakan_table',
                'create_dapodik_jenis_kesejahteraan_table',
                'create_dapodik_jenis_koneksi_table',
                'create_dapodik_jenis_ks_table',
                'create_dapodik_jenis_layanan_internet_table',
                'create_dapodik_jenis_lembaga_table',
                'create_dapodik_jenis_lk_table',
                'create_dapodik_jenis_pendaftaran_table',
                'create_dapodik_jenis_penghargaan_table',
                'create_dapodik_jenis_pesan_table',
                'create_dapodik_jenis_prasarana_table',
                'create_dapodik_jenis_prestasi_table',
                'create_dapodik_jenis_rombel_table',
                'create_dapodik_jenis_sarana_table',
                'create_dapodik_jenis_test_table',
                'create_dapodik_jenis_tinggal_table',
                'create_dapodik_jenis_tunjangan_table',
                'create_dapodik_jenjang_kepengawasan_table',
                'create_dapodik_jenjang_pendidikan_table',
                'create_dapodik_kategori_tk_table',
                'create_dapodik_keahlian_laboratorium_table',
                'create_dapodik_kebutuhan_khusus_table',
                'create_dapodik_kelompok_bidang_table',
                'create_dapodik_jenis_sertifikasi_table',
                'create_dapodik_jurusan_table',
                'create_dapodik_kelompok_usaha_table',
                'create_dapodik_klasifikasi_lembaga_table',
                'create_dapodik_kurikulum_table',
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
