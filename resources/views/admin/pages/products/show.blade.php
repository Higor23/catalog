@extends('adminlte::page')

@section('title', 'Produtos')

@section('content_header')

@stop


@section('content')

<!-- Cadastro de Produtos -->


<div class="form-client">
    <h4 class="h4">Cadastro</h4>
    <div class="btn-cad">
        <a class="btn btn-primary" href="{{ route('products.index') }}">Voltar</a>
    </div>
    <!-- Dados do produto-->
    <br>
    <div class="card">
        <div class="card-body">
            <ul>
                <li><strong>Nome:</strong> {{ $product->name }} </li>
                <li><strong>Categoria:</strong> {{ $product->category->name }} </li>
                <li><strong>Sub-Categoria:</strong> {{ $product->subcategory->name }} </li>
                <li><strong>Descrição:</strong> {{ $product->description }} </li>
            </ul>
        </div>
    </div>

</div>
    @endsection