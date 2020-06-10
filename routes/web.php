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
    return redirect('/beranda');
});

Route::get('/beranda', 'WebController@home');
Route::get('/tambah', 'WebController@menuTambah');
Route::get('/edit/id={id}', 'WebController@menuEdit');
Route::get('/hapus/id={id}', 'WebController@deleteData');
Route::post('/tambah/proses', 'WebController@insertData');
Route::post('/edit/id={id}', 'WebController@editData')->name('edit');
