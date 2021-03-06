<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Auth
Route::get('/admin/auth/login', 'admin\AuthController@index')->middleware('guest')->name('login');
Route::post('/admin/auth/login', 'admin\AuthController@postLogin')->middleware('guest');
Route::get('/admin/logout', 'admin\AuthController@logout')->middleware('auth');

// Test
Route::get('/master/test', 'TestingController@index');

// Authenticate user
Route::group(['middleware' => 'auth'], function () {

    // Home
    Route::get('/admin', 'admin\Home@index');

    // Anggota
    Route::get('/admin/anggota', 'admin\AnggotaController@index');
    Route::get('/admin/anggota/cetak', 'admin\AnggotaController@cetak');
    Route::get('/admin/anggota/cetak-data', 'admin\AnggotaController@cetakData');
    Route::get('/admin/anggota/tambah', 'admin\AnggotaController@create');
    Route::post('/admin/anggota/', 'admin\AnggotaController@store');
    Route::get('/admin/anggota/{anggota}', 'admin\AnggotaController@show');
    Route::get('/admin/anggota/edit/{anggota}', 'admin\AnggotaController@edit');
    Route::patch('/admin/anggota/{anggota}', 'admin\AnggotaController@update');
    Route::delete('/admin/anggota/{anggota}', 'admin\AnggotaController@destroy');

    // Perlengkapan
    Route::get('/admin/perlengkapan/kategori', 'admin\PerlengkapanController@category');
    Route::get('/admin/perlengkapan/check-peminjaman-terlambat', 'admin\PerlengkapanController@peminjamanTerlambat');
    Route::get('admin/perlengkapan/cetak/tipe', 'admin\PerlengkapanController@cetak');
    Route::get('/admin/perlengkapan/peminjaman', 'admin\PerlengkapanController@peminjaman');
    Route::get('/admin/perlengkapan/tambah', 'admin\PerlengkapanController@create');
    Route::get('/admin/perlengkapan', 'admin\PerlengkapanController@index');
    Route::get('/admin/perlengkapan/{perlengkapan}', 'admin\PerlengkapanController@show');
    Route::post('/admin/perlengkapan/', 'admin\PerlengkapanController@store');
    Route::delete('/admin/perlengkapan/{perlengkapan}', 'admin\PerlengkapanController@destroy');
    Route::get('/admin/perlengkapan/edit/{perlengkapan}', 'admin\PerlengkapanController@edit');
    Route::patch('/admin/perlengkapan/{perlengkapan}', 'admin\PerlengkapanController@update');
    Route::patch('/admin/perlengkapan/konfirmasi-peminjaman/{peminjaman}', 'admin\PerlengkapanController@konfirmasiPeminjaman');

    // Artikel
    Route::get('/admin/artikel', 'admin\ArtikelController@index');
    Route::get('/admin/artikel/tipe', 'admin\ArtikelController@bidang');
    Route::get('/admin/artikel/tambah', 'admin\ArtikelController@create');
    Route::post('/admin/artikel/', 'admin\ArtikelController@store');
    Route::get('/admin/artikel/edit/{artikel}', 'admin\ArtikelController@edit');
    Route::patch('/admin/artikel/{artikel}', 'admin\ArtikelController@update');
    Route::delete('/admin/artikel/{artikel}', 'admin\ArtikelController@destroy');

    // Akun
    Route::get('/admin/akun', 'admin\AkunController@index');
    Route::patch('/admin/akun/{user}', 'admin\AkunController@update');

    // Kelola Admin
    Route::get('/admin/kelola-admin', 'admin\KelolaAdminController@index');
    Route::get('/admin/kelola-admin/tambah', 'admin\KelolaAdminController@create');
    Route::post('/admin/kelola-admin', 'admin\KelolaAdminController@store');
    Route::get('/admin/kelola-admin/edit/{user}', 'admin\KelolaAdminController@edit');
    Route::patch('/admin/kelola-admin/{user}', 'admin\KelolaAdminController@update');
    Route::delete('/admin/kelola-admin/{user}', 'admin\KelolaAdminController@destroy');

    // Alumni
    Route::get('/admin/alumni/', 'admin\AlumniController@index');
    Route::get('/admin/alumni/cetak', 'admin\AlumniController@cetak');
    Route::get('/admin/alumni/kategori', 'admin\AlumniController@category');

    // Recruitmen
    Route::get('/admin/recruitmen', 'admin\RecruitmenController@index');
    Route::get('/admin/recruitmen/cetak-presensi', 'admin\RecruitmenController@cetak_presensi');
    Route::get('/admin/recruitmen/cetak-semua', 'admin\RecruitmenController@cetak_semua');
    Route::get('/admin/recruitmen/cetak-bidang', 'admin\RecruitmenController@cetak_bidang');
    Route::patch('/admin/recruitmen/{anggota}', 'admin\RecruitmenController@update');
    Route::delete('/admin/recruitmen/{anggota}', 'admin\RecruitmenController@destroy');

    // Pengaturan
    Route::get('/admin/pengaturan', 'admin\PengaturanController@index');
    Route::patch('/admin/pengaturan/peminjaman/{pengaturan}', 'admin\PengaturanController@updatePeminjaman');
    Route::patch('/admin/pengaturan/pendaftaran/{pengaturan}', 'admin\PengaturanController@updatePendaftaran');
    Route::patch('/admin/pengaturan/pesan/{pengaturan}', 'admin\PengaturanController@updatePesan');

    // Pesan
    Route::get('/admin/pesan', 'admin\PesanController@index');
    Route::get('/admin/pesan/hapus', 'admin\PesanController@destroy');

    // log
    Route::get('/admin/log-login', 'admin\logLoginController@index');

    // Info Organisasi
    Route::get('/admin/info-organisasi', 'admin\InfoOrganisasiController@index');
    Route::get('/admin/info-organisasi/cetak', 'admin\InfoOrganisasiController@cetak');
    Route::post('/admin/info-organisasi', 'admin\InfoOrganisasiController@store');
    Route::delete('/admin/info-organisasi/{info_organisasi}', 'admin\InfoOrganisasiController@destroy');

    // Component
    Route::get('/admin/component', 'admin\ComponentController@index');
    Route::patch('/admin/component/update/{component}', 'admin\ComponentController@store');
});


// Route for user

// Home
Route::get('/', 'user\HomeController@index');
Route::get('/tentang', 'user\TentangController@index');

// Peminjaman Alat
Route::get('/peminjaman-alat/cetak-bukti-peminjaman', 'user\PeminjamanController@cetak');
Route::get('/peminjaman-alat/ketentuan', 'user\PeminjamanController@ketentuanPeminjaman');
Route::get('/peminjaman-alat', 'user\PeminjamanController@index');
Route::post('/peminjaman-alat', 'user\PeminjamanController@store');
Route::get('/success', function(){return view('user.success.index');});
Route::post('/user/peminjaman/coba', 'user\PeminjamanController@coba');

// Pendaftaran Calon Anggota
Route::get('/pendaftaran-anggota', 'user\PendaftaranController@index');
Route::post('/pendaftaran-anggota', 'user\PendaftaranController@store');
Route::get('/pendaftaran-anggota/cetak', 'user\PendaftaranController@cetak');

// Kritik dan saran
Route::get('/kritik-dan-saran', 'user\PesanController@index');
Route::post('/kritik-dan-saran', 'user\PesanController@store');

// Kontak
Route::get('/kontak', 'user\KontakController@index');


// Bidang
Route::get('/bidang/lukis', 'user\BidangController@lukis');
Route::get('/bidang/lukis/artikel/{artikel}', 'user\BidangController@lukisDetail');
Route::get('/bidang/musik', 'user\BidangController@musik');
Route::get('/bidang/musik/artikel/{artikel}', 'user\BidangController@musikDetail');
Route::get('/bidang/tari', 'user\BidangController@tari');
Route::get('/bidang/tari/artikel/{artikel}', 'user\BidangController@tariDetail');
Route::get('/bidang/semua/artikel/{artikel}', 'user\BidangController@tariDetail');