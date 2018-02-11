<?php

Route::get('/ofertas', function () {
	header("Access-control-Allow-Origin: *");
	$ofertas = App\Oferta::all();
	foreach ($ofertas as $oferta) {
		$oferta->imagem = asset($oferta->imagem);
	}
	return response()->json($ofertas);
});