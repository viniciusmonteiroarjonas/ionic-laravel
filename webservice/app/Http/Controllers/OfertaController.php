<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\OfertaRequest;
use App\Oferta;
use Illuminate\Http\Request;

class OfertaController extends Controller {

	public function __construct() {
		//$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$ofertas = Oferta::all();
		return view('ofertas/index', compact('ofertas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('ofertas/create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(OfertaRequest $request) {

		$dados = $request->all();

		if ($request->hasFile('imagem')) {
			$imagem = $request->file('imagem');
			$ext = $imagem->guessClientExtension();
			$diretorio = "img/";
			$nomeImg = 'img_' . rand(111, 999) . '.' . $ext;
			$imagem->move($diretorio, $nomeImg);
			$dados['imagem'] = $diretorio . $nomeImg;
		}
		$dados['valor_f'] = 'R$ ' . number_format($dados['valor'], 2, ",", ".");
		Oferta::create($dados);

		return redirect()->route('ofertas.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		$oferta = Oferta::find($id);
		return view('ofertas/edit', compact('oferta'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		$dados = $request->all();
		if ($request->hasFile('imagem')) {
			$imagem = $request->file('imagem');
			$ext = $imagem->guessClientExtension();
			$nomeImg = 'img_' . rand(111, 999) . '.' . $ext;
			$imagem->move($diretorio, $nomeImg);
			$dados['imagem'] = $diretorio . $nomeImg;
		}
		$dados['valor_f'] = 'R$ ' . number_format($dados['valor'], 2, ",", ".");
		Oferta::find($id)->update($dados);

		return redirect()->route('ofertas.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		$oferta = Oferta::find($id)->delete();
		return redirect()->route('ofertas.index');
	}
}
