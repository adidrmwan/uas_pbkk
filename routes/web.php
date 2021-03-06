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

Route::get('/', function () {
    return view('dashboard.index');
});

Route::resource('mahasiswa', 'MahasiswaController');
Route::get('mahasiswa/{id}/destroy', 'MahasiswaController@destroy')->name('mahasiswa.delete');

Route::resource('matakuliah', 'MatakuliahController');
Route::get('matakuliah/{id}/destroy', 'MatakuliahController@destroy')->name('matakuliah.delete');