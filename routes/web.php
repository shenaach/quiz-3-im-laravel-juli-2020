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
    echo "<img src=" . asset('images/erd.png') . ">";
});

Route::get('/proyek', 'ProyekController@index');
Route::get('/proyek/create', 'ProyekController@create');
Route::post('/proyek', 'ProyekController@store');
Route::get('/proyek/{id}/daftarkan-staff', 'ProyekController@show');
Route::post('/proyek/{id}/daftarkan-staff', 'ProyekController@inputstaff');
Route::get('/proyek/{id}/edit', 'ProyekController@edit');
Route::put('/proyek/{id}', 'ProyekController@update');
Route::delete('/proyek/{id}', 'ProyekController@destroy');

Route::get('/karyawan', 'KaryawanController@index');
Route::get('/karyawan/{id}/daftar-proyek', 'KaryawanController@detail');
