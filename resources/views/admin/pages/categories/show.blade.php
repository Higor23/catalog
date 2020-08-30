@extends('adminlte::page')

@section('title', 'Categorias')

@section('content_header')

@stop


@section('content')

<!-- Cadastro de Categorias -->


<div class="form-client">
    <h4 class="h4">Categoria - <strong>{{ $category->name }}</strong></h4>
    <div class="btn-cad">
        <a class="btn btn-primary" href="{{ route('categories.index') }}">Voltar</a>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            <ul>
                <li><strong>Nome:</strong> {{ $category->name }} </li>
                <li><strong>Subcategorias:</strong></li>
               @foreach($subcategories as $subcategory)
                {{ $subcategory->name }}<br>
                @endforeach                

            </ul>
        </div>
    </div>

</div>
    @endsection