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
        
        <!-- Coluna direita: Formulário de Registro -->
        <div class="col-md-6 d-flex align-items-center justify-content-center" style="height: 100vh;">
            <div class="card border-0 shadow-sm" style="width: 350px;">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <h3 class="text-center mb-4">Criar Conta</h3>
                        
                        <!-- Nome -->
                        <div class="mb-4">
                            <label for="name" class="form-label">
                                <i class="fas fa-user"></i>
                                {{ __('Nome') }}
                            </label>
                            <input id="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autofocus>
                            @error('name')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="mb-4">
                            <label for="email" class="form-label">
                                <i class="fas fa-envelope"></i>
                                {{ __('E-mail') }}
                            </label>
                            <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                            @error('email')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Senha -->
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

                        <!-- Confirmar Senha -->
                        <div class="mb-4">
                            <label for="password-confirm" class="form-label">
                                <i class="fas fa-lock"></i>
                                {{ __('Confirmar Senha') }}
                            </label>
                            <input id="password-confirm" type="password" name="password_confirmation" class="form-control" required>
                        </div>

                        <!-- Botão Registrar -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-info text-white">
                                {{ __('Registrar') }}
                                <i class="fas fa-user-plus"></i>
                            </button>
                        </div>

                        <!-- Link de Login -->
                        <div class="text-center mt-3">
                            <small>
                                Já tem uma conta? <a href="{{ route('login') }}" class="text-decoration-none text-info">Faça login</a>
                            </small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
