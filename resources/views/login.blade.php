@extends('partials.layout')

@section('title', 'Logowanie')

@section('content')

<section class="section auth-section">
    <div class="container">
        <div class="card auth-card">
            <h1>Logowanie</h1>
            <p class="muted">Panel do zarządzania zgłoszeniami i blogiem.</p>

            <form method="POST" action="{{ route('login.process') }}" class="form">
                @csrf

                <div class="field">
                    <label for="email">Adres e-mail</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="email" class="{{ $errors->has('email') ? 'is-invalid' : '' }}">
                    @error('email')<span class="error">{{ $message }}</span>@enderror
                </div>

                <div class="field">
                    <label for="password">Hasło</label>
                    <input id="password" type="password" name="password" required autocomplete="current-password">
                    @error('password')<span class="error">{{ $message }}</span>@enderror
                </div>

                <label class="checkbox">
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <span>Zapamiętaj mnie</span>
                </label>

                <button type="submit" class="btn btn-primary btn-block">Zaloguj się</button>
            </form>

            <p class="auth-switch">Nie masz konta? <a href="{{ route('register') }}">Zarejestruj się</a></p>
        </div>
    </div>
</section>

@endsection
