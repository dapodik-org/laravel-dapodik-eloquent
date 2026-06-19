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
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\EkstraKurikuler;
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
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\JenisPendaftaran;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\JenisPenghargaan;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\JenisPrasarana;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\JenisPrestasi;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\JenisPtk;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\JenisRombel;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\JenisSarana;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\JenisSertifikasi;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\JenisTest;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\JenisTinggal;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\JenisTunjangan;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\JenjangKepengawasan;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\JenjangPendidikan;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\Jurusan;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\KategoriDesa;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\KategoriTk;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\KeahlianLaboratorium;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\KebutuhanKhusus;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\KelompokBidang;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\KelompokUsaha;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\KlasifikasiLembaga;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\Kurikulum;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\LembagaAkreditasi;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\LembagaPengangkat;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\LembSertifikasi;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\LevelWilayah;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\MataPelajaran;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\MataPelajaranKurikulum;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\MstWilayah;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\Negara;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\PangkatGolongan;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\Pekerjaan;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\PemakaiPrasarana;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\PemakaiSarana;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\Penghasilan;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\Semester;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\SertifikasiIso;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\StandarSarana;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\StatusAnak;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\StatusDiKurikulum;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\StatusKeaktifanPegawai;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\StatusKepegawaian;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\StatusKepemilikan;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\StatusKepemilikanSarpras;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\SumberAir;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\SumberDana;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\SumberDanaSekolah;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\SumberGaji;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\SumberListrik;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\TahunAjaran;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\TingkatPendidikan;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\TingkatPenghargaan;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\TingkatPrestasi;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\WaktuPenyelenggaraan;

return [

    /*
     * Prefix Table
     */
    'prefix' => env('DAPODIK_ELOQUENT_PREFIX', 'dapodik'),

    /*
     * Suffix Table
     */
    'suffix' => env('DAPODIK_ELOQUENT_SUFFIX', null),

    /*
     * Multi Connection Database
     */
    'multi_connection' => env('DAPODIK_ELOQUENT_MULTI_CONNECTION', false),

    /*
     * Custom Models (coming soon)
     */
    'models' => [
        'public' => [
            'yayasan' => \Dapodik\Laravel\Eloquent\Models\Rest\Public\Yayasan::class,
            'sekolah' => \Dapodik\Laravel\Eloquent\Models\Rest\Public\Sekolah::class,
            'ptk' => \Dapodik\Laravel\Eloquent\Models\Rest\Public\Ptk::class,
            'peserta_didik' => \Dapodik\Laravel\Eloquent\Models\Rest\Public\PesertaDidik::class,
        ],
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
            'ekstra_kurikuler' => EkstraKurikuler::class,
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
            'jenis_pendaftaran' => JenisPendaftaran::class,
            'jenis_penghargaan' => JenisPenghargaan::class,
            'jenis_prasarana' => JenisPrasarana::class,
            'jenis_prestasi' => JenisPrestasi::class,
            'jenis_rombel' => JenisRombel::class,
            'jenis_sarana' => JenisSarana::class,
            'jenis_test' => JenisTest::class,
            'jenis_tinggal' => JenisTinggal::class,
            'jenis_tunjangan' => JenisTunjangan::class,
            'jenjang_kepengawasan' => JenjangKepengawasan::class,
            'jenjang_pendidikan' => JenjangPendidikan::class,
            'kategori_tk' => KategoriTk::class,
            'keahlian_laboratorium' => KeahlianLaboratorium::class,
            'kebutuhan_khusus' => KebutuhanKhusus::class,
            'kelompok_bidang' => KelompokBidang::class,
            'jenis_sertifikasi' => JenisSertifikasi::class,
            'jurusan' => Jurusan::class,
            'kelompok_usaha' => KelompokUsaha::class,
            'klasifikasi_lembaga' => KlasifikasiLembaga::class,
            'kurikulum' => Kurikulum::class,
            'lemb_sertifikasi' => LembSertifikasi::class,
            'lembaga_akreditasi' => LembagaAkreditasi::class,
            'lembaga_pengangkat' => LembagaPengangkat::class,
            'mata_pelajaran' => MataPelajaran::class,
            'status_di_kurikulum' => StatusDiKurikulum::class,
            'tingkat_pendidikan' => TingkatPendidikan::class,
            'mata_pelajaran_kurikulum' => MataPelajaranKurikulum::class,
            'pangkat_golongan' => PangkatGolongan::class,
            'pekerjaan' => Pekerjaan::class,
            'pemakai_prasarana' => PemakaiPrasarana::class,
            'pemakai_sarana' => PemakaiSarana::class,
            'penghasilan' => Penghasilan::class,
            'tahun_ajaran' => TahunAjaran::class,
            'semester' => Semester::class,
            'sertifikasi_iso' => SertifikasiIso::class,
            'standar_sarana' => StandarSarana::class,
            'status_anak' => StatusAnak::class,
            'status_keaktifan_pegawai' => StatusKeaktifanPegawai::class,
            'status_kepegawaian' => StatusKepegawaian::class,
            'status_kepemilikan' => StatusKepemilikan::class,
            'status_kepemilikan_sarpras' => StatusKepemilikanSarpras::class,
            'sumber_air' => SumberAir::class,
            'sumber_dana_sekolah' => SumberDanaSekolah::class,
            'sumber_gaji' => SumberGaji::class,
            'sumber_listrik' => SumberListrik::class,
            'tingkat_penghargaan' => TingkatPenghargaan::class,
            'tingkat_prestasi' => TingkatPrestasi::class,
            'waktu_penyelenggaraan' => WaktuPenyelenggaraan::class,
        ],
    ],
];
