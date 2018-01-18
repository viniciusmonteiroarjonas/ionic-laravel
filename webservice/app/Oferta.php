<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model {
	protected $table = 'ofertas';

	protected $fillable = [
		'titulo',
		'descricao',
		'validade',
		'valor',
		'valor_f',
		'imagem',
	];
}
