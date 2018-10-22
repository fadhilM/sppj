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
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profil','userController@lihatProfil');
Route::resource('pakar','userController');
Route::resource('penyakit','penyakitController');
Route::resource('gejala','gejalaController');
Route::get('/search','penyakitController@search');
Route::post('/editNode/{id}','gejalaController@updateNode');
Route::post('/diagnosa/{id}','gejalaController@node');
Route::get('/diagnosa','gejalaController@diagnosa')->name('diagnosa');





