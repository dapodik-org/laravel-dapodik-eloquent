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
        ],
    ],
];
