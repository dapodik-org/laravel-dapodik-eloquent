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
                'create_dapodik_lemb_sertifikasi_table',
                'create_dapodik_lembaga_akreditasi_table',
                'create_dapodik_lembaga_pengangkat_table',
                'create_dapodik_mata_pelajaran_table',
                'create_dapodik_status_di_kurikulum_table',
                'create_dapodik_tingkat_pendidikan_table',
                'create_dapodik_mata_pelajaran_kurikulum_table',
                'create_dapodik_pangkat_golongan_table',
                'create_dapodik_pekerjaan_table',
                'create_dapodik_pemakai_prasarana_table',
                'create_dapodik_pemakai_sarana_table',
                'create_dapodik_penghasilan_table',
                'create_dapodik_tahun_ajaran_table',
                'create_dapodik_semester_table',
                'create_dapodik_sertifikasi_iso_table',
                'create_dapodik_standar_sarana_table',
                'create_dapodik_status_anak_table',
                'create_dapodik_status_keaktifan_pegawai_table',
                'create_dapodik_status_kepegawaian_table',
                'create_dapodik_status_kepemilikan_table',
                'create_dapodik_status_kepemilikan_sarpras_table',
                'create_dapodik_sumber_air_table',
                'create_dapodik_sumber_dana_sekolah_table',
                'create_dapodik_sumber_gaji_table',
                'create_dapodik_sumber_listrik_table',
                'create_dapodik_tingkat_penghargaan_table',
                'create_dapodik_tingkat_prestasi_table',
                'create_dapodik_waktu_penyelenggaraan_table',
                // 'create_dapodik_batas_waktu_rapor_table',
                // 'create_dapodik_group_matpel_table',
                // 'create_dapodik_jenis_pesan_table',
                // 'create_dapodik_kompetensi_table',
                // 'create_dapodik_map_bidang_mata_pelajaran_table',
                // 'create_dapodik_mulok_table',
                // 'create_dapodik_sasaran_blockgrant_table',
                // 'create_dapodik_table_sync_table',
                // 'create_dapodik_template_rapor_table',
                // 'create_dapodik_template_un_table',
                // 'create_dapodik_tetangga_kabkota_table',
                // 'create_dapodik_variabel_table',
                // 'create_dapodik_variabel_value_table',
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
}
