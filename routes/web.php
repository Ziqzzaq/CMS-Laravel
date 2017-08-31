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

Route::get('/', 'ArticlesController@index');


Route::get('/about', 'MainPagesController@about');
Route::get('/contact', 'MainPagesController@contact');


Route::resource('articles','ArticlesController');


Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


