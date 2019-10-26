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

Route::get('/films', 'FilmController@index') -> name('film.index');
Route::get('/film_create', 'FilmController@create') -> name('film.create');
Route::get('/film_show/{id}', 'FilmController@show') -> name('film.show');
Route::post('/film_store', 'FilmController@store') -> name('film.store');
Route::get('/film_edit/{id}', 'FilmController@edit') -> name('film.edit');
Route::post('/film_update/{id}', 'FilmController@update') -> name('film.update');
Route::get('/film_destroy/{id}', 'FilmController@destroy') -> name('film.destroy');
