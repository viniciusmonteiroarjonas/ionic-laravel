@extends('layouts.admin')

@section('content')
<div class="container">
    <h4 class="text-center"><mark>Adicionar de Ofertas</mark></h4><br>
    <div class="panel-body">
        <form class="" action="{{route('atualizar.oferta', $oferta->id)}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="PUT">
           <div class="form-group">
    <label>Título</label>
    <input type="text" class="form-control" name="titulo" value="{{isset($oferta->titulo) ? $oferta->titulo : '' }} ">
</div>
@if ($errors->has('titulo'))
    <span class="help-block">
        <strong class="text-danger">{{ $errors->first('titulo') }}</strong>
    </span>
 @endif
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
@if ($errors->has('imagem'))
    <span class="help-block">
        <strong class="text-danger">{{ $errors->first('imagem') }}</strong>
    </span>
 @endif

<div class="form-group">
    <label>Valor (ex:5000)</label>
    <input type="text" step="any"  name="valor" step="any" class="form-control" value="{{isset($oferta->valor) ? $oferta->valor : '' }} ">
</div>
@if ($errors->has('valor'))
    <span class="help-block">
        <strong class="text-danger">{{ $errors->first('valor') }}</strong>
    </span>
 @endif
<div class="form-group">
    <label>Validade</label>
    <input type="date" name="validade" class="form-control" value="{{ date('Y-m-d',strtotime($oferta->validade)) }}">
</div>
@if ($errors->has('validade'))
    <span class="help-block">
        <strong class="text-danger">{{ $errors->first('validade') }}</strong>
    </span>
 @endif
            <br>
            <button class="btn btn-primary btn-block">Salvar</button>
        </form>

    </div>
</div>
@endsection
