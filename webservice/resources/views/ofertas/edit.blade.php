@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="text-center"><mark>Editar Ofertas</mark></h4><br>
    <div class="panel-body">
        <form class="" action="{{route('ofertas.update', $oferta->id)}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            {{method_field('PUT')}}
            @include('ofertas/formulario')
            <br>
            <button class="btn btn-primary btn-block">Atualizar</button>
        </form>

    </div>
</div>
@endsection
