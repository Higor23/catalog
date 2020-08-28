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

    <!-- Formulário de cadastro de clientes -->
    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
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
                </div class="form-group">
                <label for=" inputState">Sub-categoria</label>
                <select id="inputState" class="form-control" name="subcategory_id">
                    <option selected>Selecione</option>
                    @foreach ($subcategories as $subcategory)
                    <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label>Descrição</label>
            <textarea class="form-control" name="description" placeholder="Descreva o produto"></textarea>
        </div>

        <div class="form-group">
            <label>Adicionar Imagens</label>
            <input type="file" name="image01" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <div class="form-group">
            <input type="file" name="image02" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <div class="form-group">
            <input type="file" name="image03" class="form-control-file" id="exampleFormControlFile1">
        </div>

        <button type="submit" class="btn btn-success">Cadastrar</button>
        
</div>
<br>
</form>
</div>
@endsection