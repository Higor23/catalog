@extends('adminlte::page')

@section('title', 'Subcategorias')

@section('content_header')

@stop

@section('content')

<!-- Cadastro de Subcategorias -->


<div class="form-client">
    <h4 class="h4">Cadastro de subcategoria</h4>
    <div class="btn-cad">
        <a class="btn btn-primary" href="{{ route('subcategories.index') }}">Voltar</a>
    </div>
    <br>

    <form action="{{ route('subcategory.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name="name" placeholder="Nome">
        </div>

        <div class="form-row">
            <div class="form-group col-md-2"">
                <label for=" inputState">Categoria</label>
                <div class="form-group">
                    <select id="inputState" class="form-control" name="category_id">
                        <option selected>Selecione</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
            <button type="submit" class="btn btn-success">Cadastrar</button>

        </div>
        <br>
    </form>
</div>
@endsection