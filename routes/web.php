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

Route::get('/fileupload', function () {
    return view('fileUpload');
})->middleware('auth');

Auth::routes();


Route::get('/sem', 'FileinfoController@index')->name('sem');

Route::get('/home', 'FileinfoController@index')->name('home');

Route::get('{file}', 'FilesController@down');

Route::get('/sem/{id}', 'FileinfoController@subject')->name('subject');

Route::get('/sem/{id}/{name}', 'FileinfoController@files')->name('files');


Route::post('upload', 'FilesController@add');
 