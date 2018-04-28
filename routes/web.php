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

Route::get('/', 'WelcomeController@index');
Route::get('/course/{id}', 'WelcomeController@course');
Route::get('/material/{id}', 'WelcomeController@material');
Route::get('/search', 'WelcomeController@search');

Route::middleware(['auth','isactive'])->group(function () {
	Route::resource('/materials', 'MaterialsController');
	Route::get('/materials/{id}/delete', 'MaterialsController@delete');

});

Route::middleware(['auth'])->group(function () {
	Route::get('/success_registration', 'WelcomeController@sreg');
});
Auth::routes();


