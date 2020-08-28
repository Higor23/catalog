@extends('adminlte::page')

@section('title', 'Produtos')

@section('content_header')

@stop

@section('content')
<div class="form-client">
    <h4 class="h4">Produtos</h4>
    <div class="btn-cad">
    <a href="{{ route('product.create') }}">
            <button type=" button" class="btn btn-success">Novo Produto</button>
        </a>

        <button type="button" class="btn btn-secondary">Imprimir</button>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="Buscar" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
    </nav>
    <p></p>

    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col" width="100px">Código</th>
                <th scope="col">Nome</th>
                <th scope="col" width="150px">Categoria</th>
                <th scope="col" width="150px">Subcategoria</th>
                <th scope="col">Ações</th>

            </tr>
        </thead>

        <tbody>
            @foreach ($products as $product)

                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->subcategory->name }}</td>
            <td>
                <a class="btn btn-warning" href="{{ route('product.show', [$product->id]) }}">Ver</a>
                <a class="btn btn-primary" href="{{ route('product.edit', [$product->id]) }}">Editar</a>
                <a class="btn btn-danger" href="{{ route('product.destroy', [$product->id]) }}">Excluir</a>
            </td>
</tr>
@endforeach
        </tbody>
       


    </table>
</div>


@stop