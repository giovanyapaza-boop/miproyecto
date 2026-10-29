@extends('layouts.app')

@section('title', 'Iniciar Sesión | Importadora Gikar')

@section('content')
<div class="login-container">
    
    <div class="login-box">
        <h2>Panel Admin</h2>
        
        <form action="{{ route('login') }}" method="POST">
            @csrf

            <div class="campo">
                <label for="email">Correo Electrónico</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="admin@gikar.com" required autofocus>
            </div>

            <div class="campo">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="--------" required>
            </div>

            @if($errors->any())
                <div class="mensaje-error visible">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <button type="submit" class="btn-contacto btn-login">
                Ingresar
            </button>
        </form>
    </div>

</div>
@endsection