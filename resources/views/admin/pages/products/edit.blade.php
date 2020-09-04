@extends('adminlte::page')

@section('title', 'Produtos')

@section('content_header')

@stop

@section('content')

<!-- Cadastro de Produtos -->


<div class="form-client">
    <h4 class="h4">Edição</h4>
    <div class="btn-cad">
        <a class="btn btn-primary" href="{{ route('products.index') }}">Voltar</a>
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
    <!-- Formulário de cadastro de clientes -->
    <form action="{{ route('product.update', [$product->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name="name" value="{{ $product->name ?? old('name') }}" placeholder="Nome">
        </div>

        <div class="form-row">
            <div class="form-group col-md-2"">
                <label for=" inputState">Categoria</label>
                <div class="form-group">
                    <select id="inputState" class="form-control" name="category_id" value="{{ $product->category_id ?? old('category_id') }}">
                        <option selected>Selecione</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div class="form-group">
                <label for=" inputState">Sub-categoria</label>
                <select id="inputState" class="form-control" name="subcategory_id" value="{{ $product->subcategory_id ?? old('subcategory_id') }}">
                    <option value="" selected>Selecione</option>
                    @foreach ($subcategories as $subcategory)
                    <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="description">Descrição</label>
            <input type="text" class="form-control" name="description" value="{{ $product->description ?? old('description') }}" placeholder="Descreva o produto">
        </div>

        <div class="form-group">
            <label class="text-muted" for="exampleFormControlFile1">Adicionar Imagens</label>
            <input type="file" name="image01" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <div class="form-group">
            <input type="file" name="image02" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <div class="form-group">
            <input type="file" name="image03" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <button type="submit" class="btn btn-success">Confirmar</button>
        
</div>
<br>
</form>
</div>

@endsection