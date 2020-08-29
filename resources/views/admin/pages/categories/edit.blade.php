@extends('adminlte::page')

@section('title', 'Categorias')

@section('content_header')

@stop

@section('content')

<!-- Cadastro de Categorias -->


<div class="form-client">
    <h4 class="h4">Edição</h4>
    <div class="btn-cad">
        <a class="btn btn-primary" href="{{ route('categories.index') }}">Voltar</a>
    </div>

    <!-- Formulário de cadastro de clientes -->
    <form action="{{ route('category.update', [$category->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name="name" value="{{ $category->name }}" placeholder="Nome">
        </div>

        
        <button type="submit" class="btn btn-success">Confirmar</button>
        
</div>
<br>
</form>
</div>

@endsection