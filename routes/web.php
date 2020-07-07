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

Auth::routes();

Route::get('/penginap','PenginapController@index');
Route::get('/penginap/tambah','PenginapController@tambah');
Route::post('/penginap/store','PenginapController@store');
Route::get('/penginap/edit/{id}','PenginapController@edit');
Route::post('/penginap/update','PenginapController@update');
Route::get('/penginap/hapus/{id}','PenginapController@hapus');

//LogOut
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

//riwayat
Route::get('/riwayatperbulan','RiwayatController@bulan');

//grafik
Route::get('/grafik','GrafikController@grafik');


