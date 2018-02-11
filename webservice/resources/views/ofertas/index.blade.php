@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="text-center"><mark>Listagem de Ofertas</mark></h4><br>
    <div class="panel-body">
        <a href="{{route('cadastro.oferta')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Adicionar</a><br><br>
        <table class="table table-hover" id="tabelaOfertas">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Título</th>
                    <th>Valor</th>
                    <th>Imagem</th>
                    <th data-orderable="false">Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ofertas as $oferta)
                <tr>
                    <td>{{$oferta->id}}</td>
                    <td>{{$oferta->titulo}}</td>
                    <td>{{$oferta->valor_f}}</td>
                    <td><img height="40px" src="{{asset($oferta->imagem)}}"></td>
                    <td>
                       <a href="{{route('editar.oferta', $oferta->id)}}">
                        <button class="btn btn-default"><i class="fa fa-edit"></i></button>
                       </a>
                       <button class="btn btn-default" onclick="removerOferta({{$oferta->id}})"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
