<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
 */

Route::get('/', 'OfertaController@index')->name('ofertas.index');
Route::get('/home', 'OfertaController@index')->name('home');

Route::resource('ofertas', 'OfertaController');
