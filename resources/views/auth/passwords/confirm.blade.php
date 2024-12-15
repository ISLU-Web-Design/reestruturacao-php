@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Coluna esquerda: Logo e Branding -->
        <div class="col-md-6 d-flex align-items-center justify-content-center text-center" style="background-color: #1DBACF; height: 100vh;">
            <div>
                <img src="https://img.freepik.com/fotos-premium/cartel-que-dice-su-su-logotipo-el_1085346-59793.jpg" alt="Logo" class="mb-3" style="max-width: 120px;">
                <h3 class="text-white" style="font-weight: bold;">Nome <br> <span style="color: #333;">Empresa</span></h3>
            </div>
        </div>

        <!-- Coluna direita: Formulário de Confirmação de Senha -->
        <div class="col-md-6 d-flex align-items-center justify-content-center" style="height: 100vh;">
            <div class="card border-0 shadow-sm" style="width: 350px;">
                <div class="card-body">
                    <h5 class="text-center mb-4">{{ __('Confirme sua Senha') }}</h5>
                    <p class="text-center text-muted mb-4">{{ __('Por favor, confirme sua senha antes de continuar.') }}</p>

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <!-- Campo de Senha -->
                        <div class="mb-4">
                            <label for="password" class="form-label">
                                <i class="fas fa-lock"></i>
                                {{ __('Senha') }}
                            </label>
                            <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" required>
                            @error('password')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Botão Confirmar -->
                        <div class="d-grid mb-2">
                            <button type="submit" class="btn btn-info text-white">
                                {{ __('Confirmar Senha') }}
                                <i class="fas fa-check"></i>
                            </button>
                        </div>

                        <!-- Link: Esqueceu a senha -->
                        @if (Route::has('password.request'))
                            <div class="text-center">
                                <a class="text-info" href="{{ route('password.request') }}">
                                    {{ __('Esqueceu sua senha?') }}
                                </a>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
