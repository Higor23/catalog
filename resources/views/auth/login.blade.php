<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo asset('css/style.css') ?>" type="text/css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <title>Login</title>
</head>

<body class="body-login">

    <div class="form-login">

        <form method="POST" action="{{ route('login') }}" id="form-login">

            @csrf
            <div class="card-login" style="width: 25rem; height: 24rem;">

                <div class="form-group" id="label-login">
                    <h4 class="titulo-card">Login</h4>
                    <label class="label-login">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus id="form-control">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <div class="form-group">
                        <label class="label-login">Senha</label>

                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <div class="col-md-4 offset-md-4">
                            <div class="form-check" id="div-lembrar">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Lembrar') }}
                                </label>
                            </div>
                        </div>
                    </div>


                    <div id="div-btn-enter">
                        <button type="submit" id="btn-enter">
                            {{ __('Entrar') }}
                        </button>
                    </div>
                    @if (Route::has('password.request'))
                    <div class=" form-login">
                            <a class="btn btn-link" href="{{ route('password.request') }}" id="esqueceu-senha">
                                {{ __('Esqueceu sua Senha?') }}
                            </a>
                    </div>
                    @endif

                </div>
            </div>
        </form>

    </div>
    <footer></footer>
</body>
