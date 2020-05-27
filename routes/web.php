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
    return view('accueil');
});


// Route::get('/Accueil',"AccueilController@index");
route::resource('/contact',"ContactController");
route::get('/contact','ContactController@index');
route::post('/contact/create','ContactController@store')->name('contact.store');

route::get('/accueil','accueilController@index');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
