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


Route::get('/', 'PagesController@home');

Route::get('/contact', function(){
    return view('contact');
});
Route::get('/shelters', 'ShelterController@index');
Route::get('/shelter/{id}/animals', 'ShelterController@show');
# Route::get('/animals', 'AnimalController@index');
Route::resource('animals', 'AnimalsController');