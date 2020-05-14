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
    return view('Index');
});

// Route::get('/Accueil',"AccueilController@index");

route::get('/contact','ContactController@index');
route::post('/contact/list','ContactController@store')->name('contact.list');

route::get('/index','IndexController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
