<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/index', function () {
    return view('mahasiswa/index');
});

Route::get('/home', function () {
    return view('mahasiswa/home');
});

Route::get('/lowongan', function () {
    return view('mahasiswa/lowongan');
});

Route::get('/lowongan2', function () {
    return view('mahasiswa/lowongan2');
});

Route::get('/lowongan3', function () {
    return view('mahasiswa/lowongan3');
});

Route::get('/student', function () {
    return view('mahasiswa/student');
});

Route::get('/test', function () {
    return view('mahasiswa/test');
});

Route::get('/login', function () {
    return view('mahasiswa/login');
});


Route::resource('programs', 'ProgramController');
