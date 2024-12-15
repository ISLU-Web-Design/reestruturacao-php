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
        
        <!-- Coluna direita: Formulário de Login -->
        <div class="col-md-6 d-flex align-items-center justify-content-center" style="height: 100vh;">
            <div class="card border-0 shadow-sm" style="width: 350px;">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <h3 class="text-center mb-4">Login</h3>
                        <div class="mb-4">
                            <label for="email" class="form-label">
                                <i class="fas fa-user"></i>
                                {{ __('Usuário') }}
                            </label>
                            <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" required autofocus>
                            @error('email')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password" class="form-label"> 
                                <i class="fas fa-lock"></i>
                                {{ __('Senha') }}
                            </label>
                            <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" required>
                            @error('password')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                            <div class="text-end mt-2">
                                <a href="{{ route('password.request') }}" class="text-decoration-none text-muted">
                                    {{ __('Esqueci minha senha?') }}
                                </a>
                            </div>
                            
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-info text-white">
                                {{ __('Acessar') }}
                                <i class="fas fa-sign-in-alt"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
