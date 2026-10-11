@extends('partials.layout')

@section('title', 'Kontakt')
@section('meta_description', 'Napisz do mnie: strona internetowa, projekt na studia, Excel, korepetycje z programowania albo serwis komputera. Odpiszę i ustalimy szczegóły.')

@section('content')

<section class="page-head">
    <div class="container">
        <p class="eyebrow">Kontakt</p>
        <h1>Napisz, czego potrzebujesz</h1>
        <p>Formularz trafia prosto do mnie. Odpisuję na podany adres e-mail i ustalamy szczegóły.</p>
    </div>
</section>

<section class="section">
    <div class="container contact-grid">

        <div class="card contact-card">
            @if (session('success'))
                <div class="success-box">
                    <div class="success-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
                    </div>
                    <h2>Dzięki, zgłoszenie dotarło!</h2>
                    <p>Odpiszę na podany adres e-mail najszybciej, jak się da. W pilnych sprawach możesz też zadzwonić.</p>
                    <a href="{{ route('home') }}" class="btn btn-ghost-dark">Wróć na stronę główną</a>
                </div>
            @else
                <h2>Formularz zgłoszenia</h2>

                @if ($errors->any())
                    <div class="alert alert-error">Popraw zaznaczone pola i wyślij jeszcze raz.</div>
                @endif

                <form method="POST" action="{{ route('kontakt.store') }}" class="form" novalidate>
                    @csrf

                    <div class="form-row">
                        <div class="field">
                            <label for="name">Imię i nazwisko</label>
                            <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" class="{{ $errors->has('name') ? 'is-invalid' : '' }}">
                            @error('name')<span class="error">{{ $message }}</span>@enderror
                        </div>
                        <div class="field">
                            <label for="email">Adres e-mail</label>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" class="{{ $errors->has('email') ? 'is-invalid' : '' }}">
                            @error('email')<span class="error">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="field">
                            <label for="phone">Telefon <small>(opcjonalnie)</small></label>
                            <input id="phone" type="tel" name="phone" value="{{ old('phone') }}" autocomplete="tel">
                            @error('phone')<span class="error">{{ $message }}</span>@enderror
                        </div>
                        <div class="field">
                            <label for="who">Kim jesteś?</label>
                            <select id="who" name="who" required class="{{ $errors->has('who') ? 'is-invalid' : '' }}">
                                <option value="" disabled {{ old('who') ? '' : 'selected' }}>Wybierz…</option>
                                @foreach ($who as $key => $label)
                                    <option value="{{ $key }}" {{ old('who') === $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @error('who')<span class="error">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="field">
                        <label for="topic">W czym mogę pomóc?</label>
                        @php $selectedTopic = old('topic', request()->query('temat')); @endphp
                        <select id="topic" name="topic" required class="{{ $errors->has('topic') ? 'is-invalid' : '' }}">
                            <option value="" disabled {{ $selectedTopic ? '' : 'selected' }}>Wybierz…</option>
                            @foreach ($topics as $key => $label)
                                <option value="{{ $key }}" {{ $selectedTopic === $key ? 'selected' : '' }}>{{ $label }}</option>
                            @endforeach
                        </select>
                        @error('topic')<span class="error">{{ $message }}</span>@enderror
                    </div>

                    <div class="field">
                        <label for="message">Wiadomość</label>
                        <textarea id="message" name="message" rows="6" required placeholder="Opisz krótko, czego potrzebujesz, na kiedy i w jakiej technologii (jeśli wiesz)." class="{{ $errors->has('message') ? 'is-invalid' : '' }}">{{ old('message') }}</textarea>
                        @error('message')<span class="error">{{ $message }}</span>@enderror
                    </div>

                    <div class="hp" aria-hidden="true">
                        <label for="website">Strona www</label>
                        <input id="website" type="text" name="website" tabindex="-1" autocomplete="off">
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg">Wyślij zgłoszenie</button>
                    <p class="form-note">Twoje dane wykorzystam tylko po to, żeby odpowiedzieć na zgłoszenie.</p>
                </form>
            @endif
        </div>

        <aside class="contact-aside">
            <div class="card">
                <h3>Wolisz inaczej?</h3>
                <ul class="contact-list">
                    <li>
                        <span class="icon icon-a">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16v16H4z"/><path d="m4 7 8 6 8-6"/></svg>
                        </span>
                        <div><strong>E-mail</strong><a href="mailto:{{ config('site.email') }}">{{ config('site.email') }}</a></div>
                    </li>
                    <li>
                        <span class="icon icon-b">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.4 1.8.7 2.7a2 2 0 0 1-.5 2.1L8 9.8a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.8.6 2.7.7a2 2 0 0 1 1.7 2z"/></svg>
                        </span>
                        <div><strong>Telefon</strong><a href="tel:{{ preg_replace('/\s+/', '', config('site.phone')) }}">{{ config('site.phone') }}</a></div>
                    </li>
                    <li>
                        <span class="icon icon-c">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        </span>
                        <div><strong>Gdzie</strong><span>{{ config('site.area') }}</span></div>
                    </li>
                </ul>
            </div>

            <div class="card card-soft">
                <h3>Co warto napisać</h3>
                <ul class="check-list small">
                    <li>Czego dotyczy sprawa (strona, projekt, Excel, nauka, serwis)</li>
                    <li>Na kiedy to potrzebujesz</li>
                    <li>W jakiej technologii, jeśli jest narzucona</li>
                    <li>Link lub plik z treścią zadania, jeśli masz</li>
                    <li>Przy serwisie: model sprzętu i co dokładnie się z nim dzieje</li>
                </ul>
            </div>
        </aside>

    </div>
</section>

@endsection
