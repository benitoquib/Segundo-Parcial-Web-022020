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
//Route::get('/productos', 'ProductController@index');
//Route::get('/productos/create', 'ProductController@create');
Route::resource('products','ProductController');
//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
