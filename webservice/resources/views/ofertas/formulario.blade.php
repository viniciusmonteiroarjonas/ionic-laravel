<div class="form-group">
	<label>Título</label>
	<input type="text" class="form-control" name="titulo" value="{{isset($oferta->titulo) ? $oferta->titulo : '' }} ">
</div>
<div class="form-group">
	<label>Descrição</label>
	<input type="text" name="descricao" class="form-control" value="{{isset($oferta->descricao) ? $oferta->descricao : '' }} ">
</div>

@if(isset($oferta->imagem))
	<img height="60" src="{{asset($oferta->imagem)}}" alt="">
@endif
<div class="form-group">
	<label>Imagem</label>
	<input type="file" name="imagem" class="form-control">
</div>

<div class="form-group">
	<label>Valor (ex:5.90)</label>
	<input type="number" name="valor" step="any" class="form-control" value="{{isset($oferta->valor) ? $oferta->valor : '' }} ">
</div>

<div class="form-group">
	<label>Validade</label>
	<input type="date" name="validade" class="form-control" value="{{isset($oferta->validade) ? $oferta->validade : '' }} ">
</div>