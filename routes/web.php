<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\IndustriController;
use App\Models\Mahasiswa;

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
route::get('/logout', [LoginController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/login', function () {
    return view('logreg/login');
});

Route::get('/regis', function () {
    return view('logreg/registrasi');
});

Route::get('/regisind', function () {
    return view('logreg/registrasiind');
});

Route::get('/loginind', function () {
    return view('logreg/loginind');
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

Route::get('/cv2', function () {
    return view('mahasiswa/cv/input2');
});

Route::get('/cv3', function () {
    return view('mahasiswa/cv/input3');
});

Route::get('/cv4', function () {
    return view('mahasiswa/cv/input4');
});

Route::get('/cv5', function () {
    return view('mahasiswa/cv/input5');
});

Route::get('/cv6', function () {
    return view('mahasiswa/cv/input6');
});

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
    return view('industri/profil_ind');
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