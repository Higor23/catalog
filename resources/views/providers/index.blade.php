@extends('template.template_base')

@section('content')
<div class="form-client">
    <h4 class="h4">Fornecedores</h4>
    <div class="btn-cad">
        <a href="{{ route('providers.create') }}">
            <button type=" button" class="btn btn-success">Novo Fornecedor</button>
        </a>

        <button type="button" class="btn btn-secondary">Imprimir</button>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="Buscar" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
    </nav>
    <p></p>

    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Nome Fantasia</th>
                <th scope="col">CPF/CNPJ</th>
                <th scope="col">Telefone 01</th>
                <th scope="col">Telefone 02</th>
                <th scope="col">Email</th>
                <th scope="col"></th>

            </tr>
        </thead>

        <tbody>
            @foreach ($providers as $provider)
            <a href="{{ route('providers.edit',$provider->id) }}">
                <tr>
                    <td>{{ $provider->id }}</td>
                    <td>{{ $provider->fantasia }}</td>
                    <td>{{ $provider->cpfcnpj }}</td>
                    <td>{{ $provider->telefone1 }}</td>
                    <td>{{ $provider->telefone2}}</td>
                    <td>{{ $provider->Email }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('providers.edit',$provider->id) }}">Detalhes</a>
                    </td>
            </a>
        </tbody>
        @endforeach


    </table>
</div>
@endsection
