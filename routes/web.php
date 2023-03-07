<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dosencontroller;
<<<<<<< HEAD
use App\Http\Controllers\matkulcontroller;
=======
use App\Http\Controllers\mahasiswacontroller;
>>>>>>> 4f2fb89e5f4595acdbdd965a7f0986d6dbf568e9

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
Route::get('/dosen',[dosencontroller::class, 'index']);
Route::get('/dosen/create',[dosencontroller::class, 'create']);
Route::post('/dosen',[dosencontroller::class, 'store']);
Route::get('/dosen/edit/{id}',[dosencontroller::class, 'edit']);
Route::put('/dosen/{id}',[dosencontroller::class, 'update']);
Route::delete('/dosen/delete/{id}',[dosencontroller::class, 'destroy']);


// MATKUL
Route::get('/matkul',[matkulcontroller::class, 'index']);
Route::get('/matkul/create',[matkulcontroller::class, 'create']);
Route::post('/matkul',[matkulcontroller::class, 'store']);
Route::get('/matkul/edit/{id}',[matkulcontroller::class, 'edit']);
Route::put('/matkul/{id}',[matkulcontroller::class, 'update']);
Route::delete('/matkul/delete/{id}',[matkulcontroller::class, 'destroy']);
Route::get('/mahasiswa',[mahasiswacontroller::class, 'index']);
Route::get('/mahasiswa/create',[mahasiswacontroller::class, 'create']);
Route::post('/mahasiswa',[mahasiswacontroller::class, 'store']);
Route::get('/mahasiswa/edit/{id}',[mahasiswacontroller::class, 'edit']);
Route::put('/mahasiswa/{id}',[mahasiswacontroller::class, 'update']);
Route::delete('/mahasiswa/delete/{id}',[mahasiswacontroller::class, 'destroy']);
