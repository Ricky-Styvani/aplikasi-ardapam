<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|'Users\KaryawanController@index'
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

    Route::group(['prefix' => 'karyawans'], function () {
            Route::post('create', 'Users\KaryawanController@store');
            Route::get('', 'Users\KaryawanController@index');
            Route::get('{karyawan:name}', 'Users\KaryawanController@show')->name('karyawans.show');
            Route::patch('{karyawan:name}/edit', 'Users\KaryawanController@update');
            Route::delete('{karyawan:name}/delete', 'Users\KaryawanController@destroy');    
    });

    Route::group(['prefix' => 'levels'], function () {
        Route::get('', 'Users\LevelController@index');
    });

    Route::group(['prefix' => 'pelanggans'], function () {
        Route::post('create', 'Users\PelangganController@store');
        Route::get('', 'Users\PelangganController@index');
        Route::get('{pelanggan:id_pelanggan}', 'Users\PelangganController@show')->name('pelanggans.show');
        Route::patch('{pelanggan:id_pelanggan}/edit', 'Users\PelangganController@update');
        Route::delete('{pelanggan:id_pelanggan}/delete', 'Users\PelangganController@destroy');
    });

    Route::group(['prefix' => 'meterans'], function () {
        Route::post('create', 'Users\MeteranController@store');
        Route::get('', 'Users\MeteranController@index');

    });

    Route::group(['prefix' => 'catats'], function () {
        Route::post('create', 'catat\MeteranController@store');
        Route::get('', 'catat\catatController@index');

    });
