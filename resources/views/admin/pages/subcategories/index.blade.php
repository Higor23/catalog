@extends('adminlte::page')

@section('title', 'Subcategorias')

@section('content_header')

@stop

@section('content')
<div class="form-client">
    <h4 class="h4">Subcategorias</h4>
    <div class="btn-cad">
    <a href="{{ route('subcategory.create') }}">
            <button type=" button" class="btn btn-success">Nova Subcategoria</button>
        </a>

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
                <th scope="col">Categoria</th>
                <th scope="col">Ações</th>

            </tr>
        </thead>

        <tbody>
            @foreach ($subcategories as $subcategory)

                <tr>
                    <td>{{ $subcategory->id }}</td>
                    <td>{{ $subcategory->name }}</td>
                    <td>{{ $subcategory->category->name }}</td>
            <td>
                <a class="btn btn-warning" href="{{ route('subcategory.show', [$subcategory->id]) }}">Ver</a>
                <a class="btn btn-primary" href="{{ route('subcategory.edit', [$subcategory->id]) }}">Editar</a>
                <a class="btn btn-danger" href="{{ route('subcategory.destroy', [$subcategory->id]) }}">Excluir</a>
            </td>
</tr>
@endforeach
        </tbody>
       


    </table>
</div>


@stop