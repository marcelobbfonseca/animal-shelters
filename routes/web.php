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
Route::get('/shelters/{id}', 'ShelterController@shelter_page');

Route::get('/contact', function(){
    return view('contact');
});
// API routes
Route::get('/api/shelters', 'ShelterController@index');
Route::get('/api/shelters/{id}/animals', 'ShelterController@show');
Route::apiResources([
    'animals' => 'AnimalsController',
    ]);