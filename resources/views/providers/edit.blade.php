@extends('template.template_base')

@section('content')

<!-- Cadastro de Fornecedores -->


<div class="form-client">
    <h4 class="h4">Cadastro</h4>
    <div class="btn-cad">
        <a class="btn btn-primary" href="{{ route('providers.index') }}">Voltar</a>
    </div>

    <!-- Formulário de cadastro de clientes -->
    <form action="{{ route('providers.update', $provider->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="col-md-5">
                <label>Razão Social</label>
                <input type="text" name="rsocial" class="form-control" placeholder="Razão Social" value="{{ $provider->rsocial }}">
            </div>
            <div class="col-md-4">
                <label>Nome Fantasia</label>
                <input type="text" name="fantasia" class="form-control" placeholder="Nome Fantasia" value="{{ $provider->fantasia }}">
            </div>
            <div class="col-md-3">
                <label>CPF/CNPJ</label>
                <input type="text" name="cpfcnpj" class="form-control" placeholder="CPF/CNPJ" value="{{ $provider->cpfcnpj }}">
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-3">
                <label>Telefone 01</label>
                <input type="text" class="form-control" name="telefone1" placeholder="Telefone" value="{{ $provider->telefone1 }}">
            </div>
            <div class="col-md-3">
                <label>Telefone 02</label>
                <input type="text" class="form-control" name="telefone2" placeholder="Telefone" value="{{ $provider->telefone2 }}">
            </div>
            <div class="col-md-3">
                <label>Ramo de atividade</label>
                <select id="inputState" class="form-control" name="ramo_id" value="{{ $provider->ramo_id }}">
                    <option selected>Selecione</option>
                    @foreach ($industries as $industry)
                    <option selected value="{{ $industry->id }}">{{ $industry->nome }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3">
                <label>Outro</label>
                <input type="text" class="form-control" name="outro" placeholder="Especifique o Ramo de Atividade" value="{{ $provider->outro }}">
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-5">
                <label>Indicador da IE</label>
                <input type="text" name="indestadual" class="form-control" placeholder="Contribuinte, Isento ou Não Contribuinte" value="{{ $provider->indestadual }}">
            </div>
            <div class="col-md-4">
                <label>Inscrição Estadual</label>
                <input type="text" name="iestadual" class="form-control" placeholder="Inscrição Estadual" value="{{ $provider->iestadual }}">
            </div>
            <div class="col-md-3">
                <label>Inscrição Municipal</label>
                <input type="text" name="imunicipal" class="form-control" placeholder="Inscrição Municipal" value="{{ $provider->imunicipal }}" >
            </div>
        </div>

        <div class=" form-row">
                <div class="col-md-6">
                    <label>Email</label>
                    <input type="text" class="form-control" name="Email" placeholder="Email" value="{{ $provider->Email }}">
                </div>

            </div>
            <div class="form-row">
                <div class="col">
                    <label>CEP</label>
                    <input type="text" class="form-control" name="cep" placeholder="Somente Números" value="{{ $provider->cep }}">
                </div>
                <div class="col-md-6">
                    <label>Logradouro</label>
                    <input type="text" class="form-control" name="logradouro" placeholder="Av. Frei Benjamin" value="{{ $provider->logradouro }}">
                </div>
                <div class="col">
                    <label>Número</label>
                    <input type="text" class="form-control" name="numero" placeholder="1234" value="{{ $provider->numero }}">
                </div>
                <div class="col">
                    <label>Bairro</label>
                    <input type="text" class="form-control" name="bairro" placeholder="Brasil" value="{{ $provider->bairro }}">
                </div>

            </div>

            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="inputState">Complemento</label>
                    <input type="text" class="form-control" name="complemento" placeholder="Casa, Apartamento, etc." value="{{ $provider->complemento }}">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputCity">Município</label>
                    <input type="text" class="form-control" name="municipio" placeholder="Município" value="{{ $provider->municipio }}">
                </div>
                <div class="form-group col-md-1">
                    <label for="inputState">Estado</label>
                    <input type="text" class="form-control" name="estado" placeholder="UF" value="{{ $provider->estado }}">
                </div>
            </div>

            <button type="submit" class="btn btn-success">Salvar</button>
    </form>
</div>
@endsection
