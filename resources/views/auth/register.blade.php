@extends('adminlte::page')

@section('title', 'Cadastrar')

@section('content_header')

@stop

@section('content')

<body>
    <div>
        <form method="POST" action="{{ route('storeUser') }}" id="form-register">
            @csrf

            <div class="card-register" style="width: 25rem; height: 31rem;">

                <div class="form-group" id="label-register">
                    <h5 class=""> Cadastrar Usuário</h5><br>
                    <label class="label-register">Nome Completo</label>
                    <input id="name" placeholder="Nome Completo" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus><br>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="form-group" id="label-register">
                        <label class="label-register">Email</label>
                        <input id="" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label class="label-register">Senha</label>

                        <input id="password" placeholder="Senha" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="label-register"  >Confirme a senha</label>
                        <input id="password-confirm" placeholder="Repita a senha" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>


                    <div id="div-btn-enter">
                        <button type="submit" class="btn btn-success">
                            {{ __('Cadastrar') }}
                        </button>
                        
                    </div>
                </div>
            </div>
        </form>
    </div>
    <br>
    <footer></footer>
</body>
@endsection