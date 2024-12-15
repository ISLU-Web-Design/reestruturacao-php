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

        <!-- Coluna direita: Verificação de E-mail -->
        <div class="col-md-6 d-flex align-items-center justify-content-center" style="height: 100vh;">
            <div class="card border-0 shadow-sm" style="width: 400px;">
                <div class="card-body text-center">
                    <h5 class="mb-4">{{ __('Verifique seu endereço de e-mail') }}</h5>
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Um novo link de verificação foi enviado ao seu e-mail.') }}
                        </div>
                    @endif
                    
                    <p class="text-muted mb-4">
                        {{ __('Antes de prosseguir, verifique seu e-mail para encontrar o link de verificação.') }}
                        <br>
                        {{ __('Se você não recebeu o e-mail') }},
                    </p>
                    
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-info text-white">
                            {{ __('Clique aqui para solicitar outro') }}
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
