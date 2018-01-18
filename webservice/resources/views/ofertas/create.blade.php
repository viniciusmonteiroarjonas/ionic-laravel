@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="text-center"><mark>Adicionar de Ofertas</mark></h4><br>
    <div class="panel-body">
        <form class="" action="{{route('ofertas.store')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            @include('ofertas/formulario')
            <br>
            <button class="btn btn-primary btn-block">Salvar</button>
        </form>

    </div>
</div>
@endsection
