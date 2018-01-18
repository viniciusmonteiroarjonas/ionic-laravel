@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="text-center"><mark>Listagem de Ofertas</mark></h4><br>
    <div class="panel-body">
        <a href="/ofertas/create" class="btn btn-info">Adicionar</a><br><br>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Título</th>
                    <th>Valor</th>
                    <th>Imagem</th>
                    <th>Ação</th>
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
                        <form class="" method="POST" action="{{route('ofertas.destroy', $oferta->id)}}">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                             <a class="btn btn-primary btn-sm" href="{{route('ofertas.edit', $oferta->id)}}">
                            <i class="fa fa-pencil"></i>
                        </a>
                            <button class="btn btn-default">Deletar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
