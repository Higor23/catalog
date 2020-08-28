@extends('template.template_base')

@section('content')

<!-- Cadastro de Fornecedores -->


<div class="form-client">
    <h4 class="h4">Cadastro</h4>
    <div class="btn-cad">
        <a class="btn btn-primary" href="{{ route('providers.index') }}">Voltar</a>
    </div>

    <!-- Formulário de cadastro de clientes -->
    <form action="{{ route('providers.store') }}" method="POST">
        @csrf
        <div class="form-row">
            <div class="col-md-5">
                <label>Razão Social</label>
                <input type="text" name="rsocial" class="form-control" placeholder="Razão Social">
            </div>
            <div class="col-md-4">
                <label>Nome Fantasia</label>
                <input type="text" name="fantasia" class="form-control" placeholder="Nome Fantasia">
            </div>
            <div class="col-md-3">
                <label>CPF/CNPJ</label>
                <input type="text" name="cpfcnpj" class="form-control" placeholder="CPF/CNPJ">
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-3">
                <label>Telefone 01</label>
                <input type="text" class="form-control" name="telefone1" placeholder="Telefone">
            </div>
            <div class="col-md-3">
                <label>Telefone 02</label>
                <input type="text" class="form-control" name="Telefone_02" placeholder="Telefone">
            </div>
            <div class="col-md-3">
                <label>Ramo de atividade</label>
                <select id="inputState" class="form-control" name="ramo_id">
                    <option selected>Selecione</option>
                    @foreach ($industries as $industry)
                    <option selected value="{{ $industry->id }}">{{ $industry->nome }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3">
                <label>Outro</label>
                <input type="text" class="form-control" name="outro" placeholder="Especifique o Ramo de Atividade">
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-5">
                <label>Indicador da IE</label>
                <input type="text" name="indestadual" class="form-control" placeholder="Contribuinte, Isento ou Não Contribuinte">
            </div>
            <div class="col-md-4">
                <label>Inscrição Estadual</label>
                <input type="text" name="iestadual" class="form-control" placeholder="Inscrição Estadual">
            </div>
            <div class="col-md-3">
                <label>Inscrição Municipal</label>
                <input type="text" name="imunicipal" class="form-control" placeholder="Inscrição Municipal"" >
            </div>
        </div>

        <div class=" form-row">
                <div class="col-md-6">
                    <label>Email</label>
                    <input type="text" class="form-control" name="Email" placeholder="Email">
                </div>

            </div>
            <div class="form-row">
                <div class="col">
                    <label>CEP</label>
                    <input type="text" class="form-control" name="cep" placeholder="Somente Números">
                </div>
                <div class="col-md-6">
                    <label>Logradouro</label>
                    <input type="text" class="form-control" name="logradouro" placeholder="Av. Frei Benjamin">
                </div>
                <div class="col">
                    <label>Número</label>
                    <input type="text" class="form-control" name="numero" placeholder="1234">
                </div>
                <div class="col">
                    <label>Bairro</label>
                    <input type="text" class="form-control" name="bairro" placeholder="Brasil">
                </div>

            </div>

            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="inputState">Complemento</label>
                    <input type="text" class="form-control" name="complemento" placeholder="Casa, Apartamento, etc.">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputCity">Município</label>
                    <input type="text" class="form-control" name="municipio" placeholder="Município">
                </div>
                <div class="form-group col-md-1">
                    <label for="inputState">Estado</label>
                    <input type="text" class="form-control" name="estado" placeholder="UF">
                </div>
            </div>

            <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>
</div>
@endsection
