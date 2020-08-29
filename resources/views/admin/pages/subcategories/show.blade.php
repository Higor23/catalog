@extends('adminlte::page')

@section('title', 'Subcategorias')

@section('content_header')

@stop


@section('content')

<!-- Cadastro de Subcategorias -->


<div class="form-client">
    <h4 class="h4">Subcategoria - <strong>{{ $subcategory->name }}</strong> </h4>
    <div class="btn-cad">
        <a class="btn btn-primary" href="{{ route('subcategories.index') }}">Voltar</a>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            <ul>
                <li><strong>Nome:</strong> {{ $subcategory->name }} </li>
                <li><strong>Categoria:</strong> {{ $subcategory->category->name }} </li>

            </ul>
        </div>
    </div>

</div>
    @endsection