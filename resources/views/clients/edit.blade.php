@extends('template.template_base')

@section('content')

<!-- Cadastro de clientes -->


<div class="form-client">
    <h4 class="h4">Detalhes</h4>
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
    <form action="{{ route('clients.update',$client->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Nome Completo</label>
            <input type="text" name="Nome" class="form-control" value="{{ $client->Nome }}">
        </div>

        <div class="form-row">
            <div class="col">
                <label>Telefone 01</label>
                <input type="text" class="form-control" name="Telefone_01" value="{{ $client->Telefone_01 }}">
            </div>
            <div class="col">
                <label>Telefone 02</label>
                <input type="text" class="form-control" name="Telefone_02" value="{{ $client->Telefone_02 }}">
            </div>
        </div>


        <div class="form-row">
            <div class="col">
                <label>Email</label>
                <input type="text" class="form-control" name="Email" value="{{ $client->Email }}">
            </div>
            <div class="col">
                <label>CPF</label>
                <input type="text" class="form-control" name="CPF" value="{{ $client->CPF}}">
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <label>CEP</label>
                <input type="text" class="form-control" name="CEP" value="{{ $client->CEP }}">
            </div>
            <div class="col-md-6">
                <label>Logradouro</label>
                <input type="text" class="form-control" name="Logradouro" value="{{ $client->Logradouro}}">
            </div>
            <div class="col">
                <label>Número</label>
                <input type="text" class="form-control" name="Número" value="{{ $client->Número }}">
            </div>
            <div class="col">
                <label>Bairro</label>
                <input type="text" class="form-control" name="Bairro" value="{{ $client->Bairro }}">
            </div>

        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputState">Complemento</label>
                <input type="text" class="form-control" name="Complemento" value="{{ $client->Complemento }}">
            </div>
            <div class="form-group col-md-6">
                <label for="inputCity">Município</label>
                <input type="text" class="form-control" name="Município" value="{{ $client->Município }}">
            </div>
            <div class="form-group col-md-1">
                <label for="inputState">Estado</label>
                <input type="text" class="form-control" name="Estado" value="{{ $client->Estado }}">
            </div>
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
</div>
@endsection
