@extends('adminlte::page')

@section('title', 'Subcategorias')

@section('content_header')

@stop

@section('content')

<!-- Cadastro de Categorias -->


<div class="form-client">
    <h4 class="h4">Edição</h4>
    <div class="btn-cad">
        <a class="btn btn-primary" href="{{ route('subcategories.index') }}">Voltar</a>
    </div>

    <!-- Formulário de cadastro de clientes -->
    <form action="{{ route('subcategory.update', [$subcategory->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name="name" value="{{ $subcategory->name }}" placeholder="Nome">
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

        <button type="submit" class="btn btn-success">Confirmar</button>

</div>
<br>
</form>
</div>

@endsection