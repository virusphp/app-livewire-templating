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

Route::get('/', 'DashboardController@index');

Route::group(['namespace' => 'Master'], function() {
    Route::get('/barang', 'BarangController@index')->name('barang.index');
    Route::get('/suplier', 'SuplierController@index')->name('suplier.index');
    Route::get('/unit', 'UnitController@index')->name('unit.index');
    Route::get('/satuan', 'SatuanController@index')->name('satuan.index');
});
