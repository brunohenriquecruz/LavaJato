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
<<<<<<< HEAD
Route::resource('clientcad', 'ClientCadController')->middleware('auth');

=======


Route::resource('automovelcad', 'AutomovelCadControler')->middleware('auth');
>>>>>>> 41a45de8c727e0e40d2b153897c8a2f0690e939b