<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');

Route::group(['middleware' => 'auth:api'], function () {
    Route::resource('/mahasiswa', 'MahasiswaController');
    Route::resource('/matakuliah', 'MahasiswaController');
    Route::resource('/matakuliahdetails', 'CategoryController');

    Route::get('/mahasiswa', 'MahasiswaController@tasks');
    Route::get('/matakuliah', 'CategoryController@tasks');
});
