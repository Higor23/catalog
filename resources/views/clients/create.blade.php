
@extends('template.template_base')

@section('content')

<!-- Cadastro de clientes -->


<div class="form-client">
    <h4 class="h4">Cadastro</h4>
    <div class="btn-cad">
        <a class="btn btn-primary" href="{{ route('clients.index') }}">Voltar</a>
    </div>
    <!-- Validação de erros conforme o model -->
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Por Favor, </strong>Preencha os dados corretamente.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <!-- Formulário de cadastro de clientes -->
    <form action="{{ route('clients.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nome Completo</label>
            <input type="text" name="Nome" class="form-control">
        </div>

        <div class="form-row">
            <div class="col">
                <label>Telefone 01</label>
                <input type="text" class="form-control" name="Telefone_01">
            </div>
            <div class="col">
                <label>Telefone 02</label>
                <input type="text" class="form-control" name="Telefone_02">
            </div>
        </div>


        <div class="form-row">
            <div class="col">
                <label>Email</label>
                <input type="text" class="form-control" name="Email">
            </div>
            <div class="col">
                <label>CPF</label>
                <input type="text" class="form-control" name="CPF">
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <label>CEP</label>
                <input type="text" class="form-control" name="CEP">
            </div>
            <div class="col-md-6">
                <label>Logradouro</label>
                <input type="text" class="form-control" name="Logradouro">
            </div>
            <div class="col">
                <label>Número</label>
                <input type="text" class="form-control" name="Número">
            </div>
            <div class="col">
                <label>Bairro</label>
                <input type="text" class="form-control" name="Bairro">
            </div>

        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputState">Complemento</label>
                <input type="text" class="form-control" name="Complemento">
            </div>
            <div class="form-group col-md-6">
                <label for="inputCity">Município</label>
                <input type="text" class="form-control" name="Município">
            </div>
            <div class="form-group col-md-1">
                <label for="inputState">Estado</label>
                <input type="text" class="form-control" name="Estado">
            </div>
        </div>

        <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>
</div>
@endsection
