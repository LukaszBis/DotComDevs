@extends('partials.layout')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endpush
@section('content')

<div class="login-page">
    <div class="login-box">

        <h2>Logowanie</h2>
        <p class="login-subtitle">Zaloguj się do swojego konta</p>

        <form method="POST" action="{{ route('login.process') }}">
            @csrf

            <div class="form-group">
                <label for="email">Adres e-mail</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>

                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Hasło</label>
                <input id="password" type="password" name="password" required>

                @error('password')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-extra">
                <label class="remember">
                    <input type="checkbox" name="remember">
                    Zapamiętaj mnie
                </label>

                @if (Route::has('password.request'))
                    <a class="forgot" href="{{ route('password.request') }}">
                        Nie pamiętasz hasła?
                    </a>
                @endif
            </div>

            <button type="submit" class="login-button">
                Zaloguj się
            </button>

            <p class="auth-switch">
                Nie masz konta?
                <a href="{{ route('register') }}">Zarejestruj się</a>
            </p>
        </form>
    </div>
</div>

@endsection
