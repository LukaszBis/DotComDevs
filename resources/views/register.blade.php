@extends('partials.layout')

@section('title', 'Rejestracja')

@section('content')

<section class="section auth-section">
    <div class="container">
        <div class="card auth-card">
            <h1>Rejestracja</h1>
            <p class="muted">Załóż konto w {{ config('site.brand') }}.</p>

            <form method="POST" action="{{ route('register.process') }}" class="form">
                @csrf

                <div class="field">
                    <label for="name">Imię</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" class="{{ $errors->has('name') ? 'is-invalid' : '' }}">
                    @error('name')<span class="error">{{ $message }}</span>@enderror
                </div>

                <div class="field">
                    <label for="email">Adres e-mail</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" class="{{ $errors->has('email') ? 'is-invalid' : '' }}">
                    @error('email')<span class="error">{{ $message }}</span>@enderror
                </div>

                <div class="form-row">
                    <div class="field">
                        <label for="password">Hasło</label>
                        <input id="password" type="password" name="password" required autocomplete="new-password" class="{{ $errors->has('password') ? 'is-invalid' : '' }}">
                        @error('password')<span class="error">{{ $message }}</span>@enderror
                    </div>
                    <div class="field">
                        <label for="password-confirm">Powtórz hasło</label>
                        <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Zarejestruj się</button>
            </form>

            <p class="auth-switch">Masz już konto? <a href="{{ route('login') }}">Zaloguj się</a></p>
        </div>
    </div>
</section>

@endsection
