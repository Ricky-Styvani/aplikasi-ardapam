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
            Route::post('update/{id}', 'Users\KaryawanController@update');
            Route::delete('delete/{id}', 'Users\KaryawanController@delete');
    });

    Route::group(['prefix' => 'levels'], function () {
        Route::get('', 'Users\levelController@index');
    });
