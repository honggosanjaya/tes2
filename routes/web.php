<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dosencontroller;
use App\Http\Controllers\matkulcontroller;

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
