<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo asset('css/style.css') ?>" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <title>Layout</title>
</head>


<body class="body-login">

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" <a href="{{ route('login') }}">ERP</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!--Dropdown-->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cadastros</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: black;">
                            <a class="dropdown-item" href="{{ route('clients.index') }}">Clientes</a>
                            <a class="dropdown-item" href="{{ route('providers.index') }}">Fornecedores</a>
                            <a class="dropdown-item" href="{{ route('products.index') }}">Produtos</a>

                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Financeiro</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: black;">
                            <a class="dropdown-item" href="#">Movimentações</a>
                            <a class="dropdown-item" href="#">Receitas</a>
                            <a class="dropdown-item" href="#">Despesas</a>
                            <a class="dropdown-item" href="#">Transferências</a>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Estoque</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: black;">
                            <a class="dropdown-item" href="#">Produtos</a>
                            <a class="dropdown-item" href="#">Compras</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Vendas</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: black;">
                            <a class="dropdown-item" href="#">Pedidos</a>
                            <a class="dropdown-item" href="#">PDV</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-body">
    @yield('content')

    </div>

    <footer>
        <div class="rodape">
            <div class="texto-rodape">
                <p class= "contato-cactus">  Desenvolvido por Higor Prado - Todos os Direitos Reservados.</p>
                <p class="contato-cactus" >Contato: desenvolvedor.higor@gmail.com</p>
            </div>

        </div>

    </footer>

</body>

</html>
