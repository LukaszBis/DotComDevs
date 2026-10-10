@extends('partials.layout')

@section('title', 'Oferta')
@section('meta_description', 'Strony internetowe, pomoc w projektach studenckich, Excel i korepetycje z programowania. Sprawdź, w czym mogę pomóc.')

@section('content')

<section class="page-head">
    <div class="container">
        <p class="eyebrow">Oferta</p>
        <h1>W czym mogę pomóc</h1>
        <p>Cztery obszary, w których działam najczęściej. Każdy temat wyceniam indywidualnie, a dla studentów i uczniów mam przystępne stawki.</p>
    </div>
</section>

<section class="section">
    <div class="container offer-list">

        <article id="strony" class="offer">
            <div class="offer-head">
                <div class="icon icon-a">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="14" rx="2"/><path d="M3 9h18M8 21h8"/></svg>
                </div>
                <div>
                    <h2>Strony internetowe</h2>
                    <p>Dla małych firm, osób prywatnych, projektów i portfolio.</p>
                </div>
            </div>
            <div class="offer-body">
                <div>
                    <h3>Co robię</h3>
                    <ul class="check-list">
                        <li>Strony wizytówki i landing page</li>
                        <li>Portfolio i strony osobiste</li>
                        <li>Strony na WordPressie lub w czystym kodzie (HTML, CSS, JS, PHP)</li>
                        <li>Poprawki, odświeżenie i rozwój istniejących stron</li>
                        <li>Podstawowe SEO, szybkość i działanie na telefonie</li>
                    </ul>
                </div>
                <div>
                    <h3>Jak to wygląda</h3>
                    <p>Zaczynamy od krótkiej rozmowy o tym, co strona ma robić. Przygotowuję projekt, wdrażam, pokazuję, jak samodzielnie edytować treści. Pomagam też z domeną i hostingiem.</p>
                    <a href="{{ route('kontakt') }}?temat=strona" class="btn btn-primary btn-sm">Zapytaj o stronę</a>
                </div>
            </div>
        </article>

        <article id="projekty" class="offer">
            <div class="offer-head">
                <div class="icon icon-b">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/><path d="M9 7h7M9 11h5"/></svg>
                </div>
                <div>
                    <h2>Projekty na studia</h2>
                    <p>Zaliczenia, projekty semestralne, prace inżynierskie.</p>
                </div>
            </div>
            <div class="offer-body">
                <div>
                    <h3>Co robię</h3>
                    <ul class="check-list">
                        <li>Aplikacje webowe (PHP, Laravel, JavaScript)</li>
                        <li>Bazy danych: projekt, SQL, normalizacja, zapytania</li>
                        <li>Skrypty i programy w Pythonie, C++ i innych językach</li>
                        <li>Debugowanie i dokończenie projektu, który utknął</li>
                        <li>Konsultacje przed obroną: tłumaczę, jak działa kod</li>
                    </ul>
                </div>
                <div>
                    <h3>Jak to wygląda</h3>
                    <p>Przesyłasz treść zadania lub wymagania prowadzącego. Ustalamy zakres i termin. Pracujemy razem albo robię część, a potem dokładnie omawiamy całość, żebyś czuł się pewnie na zaliczeniu.</p>
                    <a href="{{ route('kontakt') }}?temat=projekt" class="btn btn-primary btn-sm">Zapytaj o projekt</a>
                </div>
            </div>
        </article>

        <article id="excel" class="offer">
            <div class="offer-head">
                <div class="icon icon-c">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M3 15h18M9 3v18M15 3v18"/></svg>
                </div>
                <div>
                    <h2>Excel i arkusze kalkulacyjne</h2>
                    <p>Excel, Google Sheets, LibreOffice Calc.</p>
                </div>
            </div>
            <div class="offer-body">
                <div>
                    <h3>Co robię</h3>
                    <ul class="check-list">
                        <li>Formuły: WYSZUKAJ.PIONOWO, X.WYSZUKAJ, JEŻELI, SUMA.WARUNKÓW i inne</li>
                        <li>Tabele przestawne, wykresy, formatowanie warunkowe</li>
                        <li>Makra VBA i proste automatyzacje</li>
                        <li>Porządkowanie i analiza danych do prac i raportów</li>
                        <li>Nauka Excela od podstaw lub konkretnych tematów</li>
                    </ul>
                </div>
                <div>
                    <h3>Jak to wygląda</h3>
                    <p>Wysyłasz plik albo opisujesz, co ma wyjść na końcu. Przygotowuję arkusz lub robimy go razem na zajęciach, krok po kroku.</p>
                    <a href="{{ route('kontakt') }}?temat=excel" class="btn btn-primary btn-sm">Zapytaj o Excel</a>
                </div>
            </div>
        </article>

        <article id="korepetycje" class="offer">
            <div class="offer-head">
                <div class="icon icon-d">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="m8 8-4 4 4 4M16 8l4 4-4 4M14 4l-4 16"/></svg>
                </div>
                <div>
                    <h2>Korepetycje z programowania i informatyki</h2>
                    <p>Dla uczniów szkół średnich i studentów pierwszych lat.</p>
                </div>
            </div>
            <div class="offer-body">
                <div>
                    <h3>Co robię</h3>
                    <ul class="check-list">
                        <li>Podstawy programowania: Python, C++, JavaScript</li>
                        <li>Algorytmy i struktury danych, logika, rozwiązywanie zadań</li>
                        <li>Przygotowanie do matury z informatyki</li>
                        <li>HTML, CSS i pierwsze własne strony</li>
                        <li>Przygotowanie do kolokwiów i egzaminów na studiach</li>
                    </ul>
                </div>
                <div>
                    <h3>Jak to wygląda</h3>
                    <p>Zajęcia online (udostępnianie ekranu) lub na żywo w Częstochowie i okolicach. Pierwsze spotkanie to rozpoznanie poziomu i ustalenie planu. Materiały i zadania domowe dopasowuję do Ciebie.</p>
                    <a href="{{ route('kontakt') }}?temat=korepetycje" class="btn btn-primary btn-sm">Zapytaj o korepetycje</a>
                </div>
            </div>
        </article>

    </div>
</section>

<section class="section section-alt">
    <div class="container narrow">
        <div class="section-head">
            <p class="eyebrow">FAQ</p>
            <h2>Najczęstsze pytania</h2>
        </div>

        <div class="faq">
            <details>
                <summary>Ile to kosztuje?</summary>
                <p>Zależy od zakresu i terminu. Zawsze podaję cenę przed rozpoczęciem pracy, a dla studentów i uczniów mam przystępne stawki. Napisz, a wycenię Twój temat.</p>
            </details>
            <details>
                <summary>Czy pracujesz zdalnie?</summary>
                <p>Tak, większość rzeczy robię zdalnie. Korepetycje prowadzę online przez udostępnianie ekranu, a na żywo spotykam się w Częstochowie i okolicach.</p>
            </details>
            <details>
                <summary>Mam projekt na jutro. Pomożesz?</summary>
                <p>Napisz od razu i opisz dokładnie, co trzeba zrobić. Jeśli to realne w tym czasie, powiem wprost. Jeśli nie, też powiem wprost.</p>
            </details>
            <details>
                <summary>Nie wiem, od czego zacząć z programowaniem.</summary>
                <p>To najczęstszy przypadek i dokładnie do tego są pierwsze zajęcia. Zaczynamy od rozmowy o tym, co chcesz osiągnąć, i dobieramy język oraz tempo.</p>
            </details>
        </div>
    </div>
</section>

@endsection
