<?php

namespace Dapodik\Laravel\Eloquent;

use Dapodik\Laravel\Eloquent\Commands\DapodikEloquentPublishCommand;
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
            ->hasCommand(DapodikEloquentPublishCommand::class)
            ->hasMigrations([
                'dapodik/create_dapodik_level_wilayah_table',
                'dapodik/create_dapodik_negara_table',
                'dapodik/create_dapodik_kategori_desa_table',
                'dapodik/create_dapodik_mst_wilayah_table',
                'dapodik/create_dapodik_agama_table',
                'dapodik/create_dapodik_akreditasi_table',
                'dapodik/create_dapodik_akses_internet_table',
                'dapodik/create_dapodik_alasan_layak_pip_table',
                'dapodik/create_dapodik_alat_transportasi_table',
                'dapodik/create_dapodik_bank_table',
                'dapodik/create_dapodik_bentuk_lembaga_table',
                'dapodik/create_dapodik_bentuk_pendidikan_table',
                'dapodik/create_dapodik_bidang_studi_table',
                'dapodik/create_dapodik_bidang_usaha_table',
                'dapodik/create_dapodik_ekstra_kurikuler_table',
                'dapodik/create_dapodik_errortype_table',
                'dapodik/create_dapodik_fasilitas_layanan_table',
                'dapodik/create_dapodik_gelar_akademik_table',
                'dapodik/create_dapodik_jabatan_fungsional_table',
                'dapodik/create_dapodik_jenis_ptk_table',
                'dapodik/create_dapodik_jabatan_ptk_table',
                'dapodik/create_dapodik_jabatan_tugas_ptk_table',
                'dapodik/create_dapodik_jadwal_paud_table',
                'dapodik/create_dapodik_jenis_akt_pd_table',
                'dapodik/create_dapodik_jenis_aktivitas_kepanitiaan_table',
                'dapodik/create_dapodik_jenis_bantuan_table',
                'dapodik/create_dapodik_sumber_dana_table',
                'dapodik/create_dapodik_jenis_beasiswa_table',
                'dapodik/create_dapodik_jenis_cita_table',
                'dapodik/create_dapodik_jenis_diklat_table',
                'dapodik/create_dapodik_jenis_gugus_table',
                'dapodik/create_dapodik_jenis_hapus_buku_table',
                'dapodik/create_dapodik_jenis_hobby_table',
                'dapodik/create_dapodik_jenis_ijazah_table',
                'dapodik/create_dapodik_jenis_keluar_table',
                'dapodik/create_dapodik_jenis_kepanitiaan_table',
                'dapodik/create_dapodik_jenis_kerusakan_table',
                'dapodik/create_dapodik_jenis_kesejahteraan_table',
                'dapodik/create_dapodik_jenis_koneksi_table',
                'dapodik/create_dapodik_jenis_ks_table',
                'dapodik/create_dapodik_jenis_layanan_internet_table',
                'dapodik/create_dapodik_jenis_lembaga_table',
                'dapodik/create_dapodik_jenis_lk_table',
                'dapodik/create_dapodik_jenis_pendaftaran_table',
                'dapodik/create_dapodik_jenis_penghargaan_table',
                'dapodik/create_dapodik_jenis_prasarana_table',
                'dapodik/create_dapodik_jenis_prestasi_table',
                'dapodik/create_dapodik_jenis_rombel_table',
                'dapodik/create_dapodik_jenis_sarana_table',
                'dapodik/create_dapodik_jenis_test_table',
                'dapodik/create_dapodik_jenis_tinggal_table',
                'dapodik/create_dapodik_jenis_tunjangan_table',
                'dapodik/create_dapodik_jenjang_kepengawasan_table',
                'dapodik/create_dapodik_jenjang_pendidikan_table',
                'dapodik/create_dapodik_kategori_tk_table',
                'dapodik/create_dapodik_keahlian_laboratorium_table',
                'dapodik/create_dapodik_kebutuhan_khusus_table',
                'dapodik/create_dapodik_kelompok_bidang_table',
                'dapodik/create_dapodik_jenis_sertifikasi_table',
                'dapodik/create_dapodik_jurusan_table',
                'dapodik/create_dapodik_kelompok_usaha_table',
                'dapodik/create_dapodik_klasifikasi_lembaga_table',
                'dapodik/create_dapodik_kurikulum_table',
                'dapodik/create_dapodik_lemb_sertifikasi_table',
                'dapodik/create_dapodik_lembaga_akreditasi_table',
                'dapodik/create_dapodik_lembaga_pengangkat_table',
                'dapodik/create_dapodik_mata_pelajaran_table',
                'dapodik/create_dapodik_status_di_kurikulum_table',
                'dapodik/create_dapodik_tingkat_pendidikan_table',
                'dapodik/create_dapodik_mata_pelajaran_kurikulum_table',
                'dapodik/create_dapodik_pangkat_golongan_table',
                'dapodik/create_dapodik_pekerjaan_table',
                'dapodik/create_dapodik_pemakai_prasarana_table',
                'dapodik/create_dapodik_pemakai_sarana_table',
                'dapodik/create_dapodik_penghasilan_table',
                'dapodik/create_dapodik_tahun_ajaran_table',
                'dapodik/create_dapodik_semester_table',
                'dapodik/create_dapodik_sertifikasi_iso_table',
                'dapodik/create_dapodik_standar_sarana_table',
                'dapodik/create_dapodik_status_anak_table',
                'dapodik/create_dapodik_status_keaktifan_pegawai_table',
                'dapodik/create_dapodik_status_kepegawaian_table',
                'dapodik/create_dapodik_status_kepemilikan_table',
                'dapodik/create_dapodik_status_kepemilikan_sarpras_table',
                'dapodik/create_dapodik_sumber_air_table',
                'dapodik/create_dapodik_sumber_dana_sekolah_table',
                'dapodik/create_dapodik_sumber_gaji_table',
                'dapodik/create_dapodik_sumber_listrik_table',
                'dapodik/create_dapodik_tingkat_penghargaan_table',
                'dapodik/create_dapodik_tingkat_prestasi_table',
                'dapodik/create_dapodik_waktu_penyelenggaraan_table',
                // 'dapodik/create_dapodik_batas_waktu_rapor_table',
                // 'dapodik/create_dapodik_group_matpel_table',
                // 'dapodik/create_dapodik_jenis_pesan_table',
                // 'dapodik/create_dapodik_kompetensi_table',
                // 'dapodik/create_dapodik_map_bidang_mata_pelajaran_table',
                // 'dapodik/create_dapodik_mulok_table',
                // 'dapodik/create_dapodik_sasaran_blockgrant_table',
                // 'dapodik/create_dapodik_table_sync_table',
                // 'dapodik/create_dapodik_template_rapor_table',
                // 'dapodik/create_dapodik_template_un_table',
                // 'dapodik/create_dapodik_tetangga_kabkota_table',
                // 'dapodik/create_dapodik_variabel_table',
                // 'dapodik/create_dapodik_variabel_value_table',
                // PUBLIC
                'dapodik/create_dapodik_yayasan_table',
                'dapodik/create_dapodik_sekolah_table',
                'dapodik/create_dapodik_ptk_table',
                'dapodik/create_dapodik_peserta_didik_table',
            ]);
    }

    public function registeringPackage(): void
    {
        $this->app->singleton('dapodik.eloquent.laravel', function ($app) {
            return new EloquentManager($app);
        });
    }

    public function bootingPackage(): void
    {
        app('dapodik.eloquent.laravel');
    }

    public function packageBooted(): void
    {
        $this->loadMigrationsFrom(database_path('migrations/dapodik'));
    }
}
