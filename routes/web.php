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
    return view('dashboard');
});

Route::get('/pengeluaran/input', function () {
    return view('inputPengeluaran');
});
Route::get('/pemasukan/input', function () {
    return view('inputPemasukan');
});

Route::get('/jenispemasukan/input', function () {
    return view('inputMasterJenisPemasukan');
});
Route::get('/jenispengeluaran/input', function () {
    return view('inputMasterJenisPengeluaran');
});

Route::get('/jenispemasukan', function () {
    return view('jenisPemasukan');
});
Route::get('/jenispengeluaran', function () {
    return view('jenisPengeluaran');
});

Route::get('kategori/create','KategoriController@create');
Route::post('kategori/store','KategoriController@store');

/*//jenis pengeluaran
Route::get('/jenis_pengeluaran', 'pengeluaranController@index');

Route::get('jenis_pengeluaran/create','pengeluaranController@create');
Route::post('jenis_pengeluaran/store','pengeluaranController@store');

Route::get('jenis_pengeluaran/edit/{id}','pengeluaranController@edit');
Route::post('jenis_pengeluaran/update/{id}','pengeluaranController@update');

Route::delete('jenis_pengeluaran/delete/{id}','pengeluaranController@destroy');

//jenis pemasukan
Route::get('/jenis_pemasukan', 'pemasukanController@index');

Route::get('jenis_pemasukan/create','pemasukanController@create');
Route::post('jenis_pemasukan/store','pemasukanController@store');

Route::get('jenis_pengeluaran/edit/{id}','pemasukanController@edit');
Route::post('jenis_pengeluaran/update/{id}','pemasukanController@update');

Route::delete('jenis_pengeluaran/delete/{id}','pemasukanController@destroy');
//pengeluaran
//pemasukan*/