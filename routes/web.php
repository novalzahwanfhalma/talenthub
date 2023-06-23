<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\IndustriController;
use App\Http\Controllers\LoginindController;
use App\Models\Mahasiswa;
use App\Models\Portofolio;
use App\Models\Pengalaman;
use App\Models\Prestasi;
use App\Models\Sertifikasi;
use App\Models\Bahasa;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\PengalamanController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\SertifikasiController;
use App\Http\Controllers\BahasaController;
use App\Http\Controllers\ProfilemhsController;
use App\Models\Industri;

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

Route::get('/', function () {
    return view('welcome');
});

route::get('/registrasi', [LoginController::class, 'registrasi'])->name('registrasi');
route::post('/simpanregistrasi', [MahasiswaController::class, 'store'])->name('simpanregistrasi');
route::get('/login', [LoginController::class, 'halamanlogin'])->name('login');
route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
route::post('/logout', [LoginController::class, 'proses_logout'])->name('logout');

// Registration routes for industry
Route::get('/registrasiind', [LoginindController::class, 'registrasi'])->name('registrasiind');
Route::post('/simpanregistrasiind', [IndustriController::class, 'store'])->name('simpanregistrasiind');
Route::get('/loginind', [LoginindLController::class, 'halamanlogin'])->name('loginind');
Route::post('/postloginind', [LoginindController::class, 'postlogin'])->name('postloginind');
Route::get('/logoutind', [LoginindController::class, 'proses_logout'])->name('logoutind');


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/regis', function () {
    return view('auth/registrasi');
});

Route::get('/regisind', function () {
    return view('auth/registrasiind');
});

Route::get('/loginind', function () {
    return view('auth/loginind');
});

/*
|--------------------------------------------------------------------------
| mahasiswa (INDEX, HOME)
|--------------------------------------------------------------------------
*/

Route::get('/index', function () {
    return view('mahasiswa/index');
});

Route::get('/home', function () {
    return view('mahasiswa/home');
});

Route::get('/indexind', function () {
    return view('industri/indexind');
});


/*
|--------------------------------------------------------------------------
| mahasiswa (LOWONGAN)
|--------------------------------------------------------------------------
*/

Route::get('/lowongan', function () {
    return view('mahasiswa/lowongan');
});

Route::get('/lowongan2', function () {
    return view('mahasiswa/lowongan2');
});

Route::get('/lowongan3', function () {
    return view('mahasiswa/lowongan3');
});

/*
|--------------------------------------------------------------------------
| mahasiswa (STUDENT, PERUSAHAAN)
|--------------------------------------------------------------------------
*/

Route::get('/student', function () {
    return view('mahasiswa/student');
});

Route::get('/perusahaan', function () {
    return view('mahasiswa/perusahaan');
});

Route::get('/perusahaan2', function () {
    return view('mahasiswa/perusahaan2');
});

Route::get('/perusahaan3', function () {
    return view('mahasiswa/perusahaan3');
});



/*
|--------------------------------------------------------------------------
| mahasiswa (PROFIL)
|--------------------------------------------------------------------------
*/

Route::get('/editprof', function () {
    return view('mahasiswa/profil/editprofil');
});

Route::get('/mhsprof', function () {
    return view('mahasiswa/profil/mhsprofil');
});

Route::get('/mhsprof3', function () {
    return view('mahasiswa/profil/profilview');
});

Route::get('/indprof2', function () {
    return view('mahasiswa/profil/indprofil2');
});

/*
|--------------------------------------------------------------------------
| mahasiswa (CV)
|--------------------------------------------------------------------------
*/

Route::get('/cv1', function () {
    return view('mahasiswa/cv/input1');
});

Route::get('/cv1', [PortofolioController::class, 'index'])->name('portofolio.index');

// Route untuk menampilkan form tambah portofolio
Route::get('/cv1/create-modal', [PortofolioController::class, 'create'])->name('portofolio.create');

// Route untuk menyimpan data portofolio
Route::post('/cv1/store', [PortofolioController::class, 'store'])->name('portofolio.store');

Route::DELETE('/cv1/delete/{id_portofolio}', [PortofolioController::class, 'destroy'])
    ->name('portofolio.destroy');

Route::get('/cv2', function () {
    return view('mahasiswa/cv/input2');
});

Route::get('/cv2', [PendidikanController::class, 'index'])->name('pendidikan.index');

// Route untuk menampilkan form tambah pendidikan
Route::get('/cv2/create-modal', [PendidikanController::class, 'create'])->name('pendidikan.create');

// Route untuk menyimpan data pendidikan
Route::post('/cv2/store', [PendidikanController::class, 'store'])->name('pendidikan.store');

Route::DELETE('/cv2/delete/{id_pendidikan}', [PendidikanController::class, 'destroy'])
    ->name('pendidikan.destroy');

Route::get('/cv3', function () {
    return view('mahasiswa/cv/input3');
});

Route::get('/cv3', [PengalamanController::class, 'index'])->name('pengalaman.index');

// Route untuk menampilkan form tambah pengalaman
Route::get('/cv3/create-modal', [PengalamanController::class, 'create'])->name('pengalaman.create');

// Route untuk menyimpan data pengalaman
Route::post('/cv3/store', [PengalamanController::class, 'store'])->name('pengalaman.store');

Route::DELETE('/cv3/delete/{id_pengalaman}', [PengalamanController::class, 'destroy'])
    ->name('pengalaman.destroy');

Route::get('/cv4', function () {
    return view('mahasiswa/cv/input4');
});

Route::get('/cv4', [PrestasiController::class, 'index'])->name('prestasi.index');

// Route untuk menampilkan form tambah prestasi
Route::get('/cv4/create-modal', [PrestasiController::class, 'create'])->name('prestasi.create');

// Route untuk menyimpan data prestasi
Route::post('/cv4/store', [PrestasiController::class, 'store'])->name('prestasi.store');

Route::DELETE('/cv4/delete/{id_prestasi}', [PrestasiController::class, 'destroy'])
    ->name('prestasi.destroy');

Route::get('/cv5', function () {
    return view('mahasiswa/cv/input5');
});

Route::get('/cv5', [SertifikasiController::class, 'index'])->name('sertifikasi.index');

// Route untuk menampilkan form tambah sertifikasi
Route::get('/cv5/create-modal', [SertifikasiController::class, 'create'])->name('sertifikasi.create');

// Route untuk menyimpan data sertifikasi
Route::post('/cv5/store', [SertifikasiController::class, 'store'])->name('sertifikasi.store');

Route::DELETE('/cv5/delete/{id_sertifikasi}', [SertifikasiController::class, 'destroy'])
    ->name('sertifikasi.destroy');

Route::get('/cv6', function () {
    return view('mahasiswa/cv/input6');
});

Route::get('/cv6', [BahasaController::class, 'index'])->name('bahasa.index');

// Route untuk menampilkan form tambah bahasa
Route::get('/cv6/create-modal', [BahasaController::class, 'create'])->name('bahasa.create');

// Route untuk menyimpan data bahasa
Route::post('/cv6/store', [BahasaController::class, 'store'])->name('bahasa.store');

Route::DELETE('/cv6/delete/{id_bahasa}', [BahasaController::class, 'destroy'])
    ->name('bahasa.destroy');


// update user
// Route::get('/editprof', function () {
// $mhs;
// return view('mahasiswa/profil/editprofil',
// ['mahasiswa' => $mhs]
// );
// });

// Route::get('/editprof', [MahasiswaController::class, 'index'])->name('mahasiswa.index');

Route::get('/mahasiswa/profil/editprofil/', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');

Route::put('/mahasiswa/profil/editprofil/{nim}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');



Route::get('/industri/profil/profil_ind/', [IndustriController::class, 'edit'])->name('industri.edit');

Route::put('/industri/profil/profil_ind/{id_industri}', [IndustriController::class, 'update'])->name('industri.update');


/*
|--------------------------------------------------------------------------
| lainnya
|--------------------------------------------------------------------------
*/
Route::get('/test', function () {
    return view('mahasiswa/test');
});

Route::get('/aa', function () {
    return view('mahasiswa/aa');
});

/*
|--------------------------------------------------------------------------
| industri
|--------------------------------------------------------------------------
*/

Route::get('/lowonganind', function () {
    return view('industri/lowongan_ind');
});

Route::get('/inputind', function () {
    return view('industri/input_lowongan');
});

/*
|--------------------------------------------------------------------------
| industri (PROFILE)
|--------------------------------------------------------------------------
*/

Route::get('/indprof', function () {
    return view('industri/profil/indprofil');
});

Route::get('/profilind', function () {
    return view('industri/profil/profil_ind');
});

Route::get('/mhsprof2', function () {
    return view('industri/profil/mhsprofil2');
});

Route::get('/laporan', function () {
    return response()->view('mahasiswa/cv/laporan')->header('Content-Type', 'application/pdf');
});

Route::get('/cobacoba', function () {
    return view('mahasiswa/cobacoba');
});




/*
|--------------------------------------------------------------------------
| industri (vIEW)
|--------------------------------------------------------------------------
*/

Route::get('/indmhs', function () {
    return view('industri/viewmahasiswa');
});

Route::get('/indind', function () {
    return view('industri/viewperusahaan');
});

Route::resource('programs', 'ProgramController');