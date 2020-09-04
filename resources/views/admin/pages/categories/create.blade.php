@extends('adminlte::page')

@section('title', 'Categorias')

@section('content_header')

@stop

@section('content')

<!-- Cadastro de Categorias -->


<div class="form-client">
    <h4 class="h4">Cadastro de categoria</h4>
    <div class="btn-cad">
        <a class="btn btn-primary" href="{{ route('categories.index') }}">Voltar</a>
    </div>
    <br>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name="name" placeholder="Nome">
        </div>

        <button type="submit" class="btn btn-success">Cadastrar</button>
        
</div>
<br>
</form>
</div>
@endsection