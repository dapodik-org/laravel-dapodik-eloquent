<?php

use Dapodik\Laravel\Eloquent\Models\Rest\Ref\Agama;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\Akreditasi;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\AksesInternet;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\AlasanLayakPip;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\AlatTransportasi;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\Bank;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\BentukLembaga;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\BentukPendidikan;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\BidangStudi;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\BidangUsaha;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\Ekstrakurikuler;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\Errortype;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\FasilitasLayanan;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\GelarAkademik;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\JabatanFungsional;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\JabatanPtk;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\JabatanTugasPtk;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\JadwalPaud;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\JenisAktivitasKepanitiaan;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\JenisAktPd;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\JenisBantuan;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\JenisBeasiswa;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\JenisCita;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\JenisDiklat;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\JenisGugus;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\JenisHapusBuku;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\JenisHobby;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\JenisIjazah;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\JenisKeluar;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\JenisKepanitiaan;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\JenisKerusakan;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\JenisKesejahteraan;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\JenisKoneksi;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\JenisKs;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\JenisLayananInternet;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\JenisLembaga;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\JenisLk;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\JenisPtk;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\KategoriDesa;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\LevelWilayah;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\MstWilayah;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\Negara;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\SumberDana;

return [

    /*
     * Prefix Table
     */
    'prefix' => 'dapodik',

    /*
     * Suffix Table
     */
    'suffix' => null,

    /*
     * Multi Connection Database
     */
    'multi_connection' => false,

    /*
     * Custom Models
     */
    'models' => [
        'ref' => [
            'level_wilayah' => LevelWilayah::class,
            'negara' => Negara::class,
            'kategori_desa' => KategoriDesa::class,
            'mst_wilayah' => MstWilayah::class,
            'agama' => Agama::class,
            'akreditasi' => Akreditasi::class,
            'akses_internet' => AksesInternet::class,
            'alasan_layak_pip' => AlasanLayakPip::class,
            'alat_transportasi' => AlatTransportasi::class,
            'bank' => Bank::class,
            'bentuk_lembaga' => BentukLembaga::class,
            'bentuk_pendidikan' => BentukPendidikan::class,
            'bidang_studi' => BidangStudi::class,
            'bidang_usaha' => BidangUsaha::class,
            'ekstrakurikuler' => Ekstrakurikuler::class,
            'errortype' => Errortype::class,
            'fasilitas_layanan' => FasilitasLayanan::class,
            'gelar_akademik' => GelarAkademik::class,
            'jabatan_fungsional' => JabatanFungsional::class,
            'jenis_ptk' => JenisPtk::class,
            'jabatan_ptk' => JabatanPtk::class,
            'jabatan_tugas_ptk' => JabatanTugasPtk::class,
            'jadwal_paud' => JadwalPaud::class,
            'jenis_akt_pd' => JenisAktPd::class,
            'jenis_aktivitas_kepanitiaan' => JenisAktivitasKepanitiaan::class,
            'jenis_bantuan' => JenisBantuan::class,
            'sumber_dana' => SumberDana::class,
            'jenis_beasiswa' => JenisBeasiswa::class,
            'jenis_cita' => JenisCita::class,
            'jenis_diklat' => JenisDiklat::class,
            'jenis_gugus' => JenisGugus::class,
            'jenis_hapus_buku' => JenisHapusBuku::class,
            'jenis_hobby' => JenisHobby::class,
            'jenis_ijazah' => JenisIjazah::class,
            'jenis_keluar' => JenisKeluar::class,
            'jenis_kepanitiaan' => JenisKepanitiaan::class,
            'jenis_kerusakan' => JenisKerusakan::class,
            'jenis_kesejahteraan' => JenisKesejahteraan::class,
            'jenis_koneksi' => JenisKoneksi::class,
            'jenis_ks' => JenisKs::class,
            'jenis_layanan_internet' => JenisLayananInternet::class,
            'jenis_lembaga' => JenisLembaga::class,
            'jenis_lk' => JenisLk::class,
        ],
    ],
];
