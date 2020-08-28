@extends('template.template_base')

@section('content')

<!-- Cadastro de Produtos -->


<div class="form-client">
    <h4 class="h4">Cadastro</h4>
    <div class="btn-cad">
        <a class="btn btn-primary" href="{{ route('renevue.index') }}">Voltar</a>
    </div>

    <!-- Formulário de cadastro de clientes -->
    <form action="{{ route('renevue.store') }}" method="POST">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-2">
                <label>Vencimento</label>
                <input type=" text" class="form-control" name="vencimento" placeholder="Vencimento" alt="vencimento">
            </div>

            <div class="form-group col-md-2">
                <label for="inputState">Conta</label>
                <select id="inputState" class="form-control" name="conta_id">
                    <option selected>Selecione</option>
                    @foreach ($contas as $conta)
                    <option selected value="{{ $conta->id }}">{{ $conta->nome }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-8">
                <label>Descrição</label>
                <input type=" text" class="form-control" name="descricao" placeholder="Descrição" alt="Descrição">
            </div>
            <div class="form-group col-md-2">
                <label>Valor</label>
                <input type=" text" class="form-control" name="valor" placeholder="0,00" alt="valor">
            </div>
            <div class="form-group col-md-2">
                <label for="inputState">Categoria</label>
                <select id="inputState" class="form-control" name="categoria" alt="categoria">
                    <option selected>Selecione</option>
                    <option selected>Venda externa</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label>Recebimento</label>
                <input type=" text" class="form-control" name="recebimento" placeholder="Recebimento" alt="data_recebimento">
            </div>
            <div class="form-group col-md-3">
                <label>Forma de Recebimento</label>
                <select id="inputState" class="form-control" name="tipoRecebimento" alt="Forma_de_Recebimento">
                    <option selected>Selecione</option>
                    <option selected>Dinheiro</option>
                    <option selected>Cartão</option>
                </select>

            </div>


        </div>



        <div class="form-group">
            <label for="observacoes">Observações</label>
            <input type="text" class="form-control" name="obs" placeholder="Observações" alt="Observações">
        </div>

        <button type="submit" class="btn btn-success">Cadastrar</button>

    </form>
</div>
@endsection
