<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
 */

Route::get('/', 'OfertaController@index')->name('ofertas.index');
Route::get('/home', 'OfertaController@index')->name('home');

Route::group(['prefix' => 'ofertas'], function () {
	Route::get('/', 'OfertaController@index');
	Route::get('/remover/{id}', 'OfertaController@remover');
	Route::get('/cadastro', 'OfertaController@cadastro')->name('cadastro.oferta');
	Route::post('/cadastro/salvar', 'OfertaController@salvar')->name('salvar.oferta');
	Route::get('/editar/{id}', 'OfertaController@editar')->name('editar.oferta');
	Route::put('/atualizar/{id}', 'OfertaController@atualizar')->name('atualizar.oferta');
});
//Route::resource('ofertas', 'OfertaController');
