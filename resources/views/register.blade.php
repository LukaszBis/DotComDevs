@extends('partials.layout')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endpush
@section('content')

<div class="login-page">
    <div class="login-box">

        <h2>Rejestracja</h2>
        <p class="login-subtitle">Załóż konto w DotCom</p>

        <form method="POST" action="{{ route('register.process') }}">
            @csrf

            <div class="form-group">
                <label for="name">Imię</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required>

                @error('name')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Adres e-mail</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required>

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

            <div class="form-group">
                <label for="password-confirm">Powtórz hasło</label>
                <input id="password-confirm" type="password" name="password_confirmation" required>
            </div>

            <button type="submit" class="login-button">
                Zarejestruj się
            </button>

            <p class="auth-switch">
                Masz już konto?
                <a href="{{ route('login') }}">Zaloguj się</a>
            </p>

        </form>
    </div>
</div>

@endsection
