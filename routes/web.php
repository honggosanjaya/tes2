<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dosencontroller;
use App\Http\Controllers\mahasiswacontroller;

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
Route::get('/mahasiswa',[mahasiswacontroller::class, 'index']);
Route::get('/mahasiswa/create',[mahasiswacontroller::class, 'create']);
Route::post('/mahasiswa',[mahasiswacontroller::class, 'store']);
Route::get('/mahasiswa/edit/{id}',[mahasiswacontroller::class, 'edit']);
Route::put('/mahasiswa/{id}',[mahasiswacontroller::class, 'update']);
Route::delete('/mahasiswa/delete/{id}',[mahasiswacontroller::class, 'destroy']);
