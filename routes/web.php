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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', 'HomeController@index');

Route::resource('/jabatans', 'jabatansController');
Route::resource('/golongans', 'golongansController');
Route::resource('/kategori', 'kategoriController');
Route::resource('/pegawai', 'pegawaiController');

Auth::routes();


Route::resource('/tunjangans', 'tunjanganController');
Route::resource('/tunjanganpegawai', 'tunjanganspegawaisController');
Route::resource('/lembur', 'lemburController');
Route::resource('/penggajian', 'penggajianController');

Route::group(['middleware' => ['api'],'prefix' => 'api'], function () {
    Route::post('register', 'APIController@register');
    Route::post('login', 'APIController@login');

    Route::group(['middleware' => 'jwt-auth'], function () {
    	Route::post('get_user_details', 'APIController@get_user_details');
    });
});