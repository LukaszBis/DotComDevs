@extends('partials.layout')

@section('title', 'O mnie')
@section('meta_description', 'Jestem Łukasz, web developer. Tworzę strony internetowe, pomagam studentom w projektach i uczę programowania.')

@section('content')

<section class="page-head">
    <div class="container">
        <p class="eyebrow">O mnie</p>
        <h1>Programista, który lubi tłumaczyć</h1>
        <p>Kilka słów o tym, kim jestem i dlaczego robię to, co robię.</p>
    </div>
</section>

<section class="section">
    <div class="container about-grid">
        <div class="about-photo">
            <div class="photo-card">
                <img src="{{ asset('images/lukasz.png') }}" alt="Łukasz Biś" width="320" height="320">
            </div>
            <div class="about-facts">
                <div><strong>Łukasz Biś</strong><span>web developer</span></div>
                <div><strong>Częstochowa</strong><span>i zdalnie, cała Polska</span></div>
                <div><strong>PHP · JS · SQL</strong><span>na co dzień</span></div>
            </div>
        </div>

        <div class="about-text prose">
            <h2>Cześć!</h2>
            <p>
                Nazywam się Łukasz i na co dzień zajmuję się tworzeniem stron internetowych.
                Pracuję głównie w PHP i Laravelu, JavaScripcie i bazach danych, ale równie dobrze czuję się
                w Excelu, w którym potrafię zrobić rzeczy, o których większość ludzi nie wie, że są możliwe.
            </p>
            <p>
                Zaczynałem jak większość: od zadań na studiach, kolokwiów i projektów robionych na ostatnią chwilę.
                Pamiętam, jak dużo dawało mi, gdy ktoś potrafił wytłumaczyć temat prostymi słowami,
                zamiast odsyłać do dokumentacji. Dziś sam chcę być tą osobą dla innych.
            </p>
            <p>
                Dlatego oprócz stron dla klientów pomagam <strong>studentom</strong> w projektach zaliczeniowych
                i inżynierskich, a <strong>uczniów szkół średnich</strong> uczę programowania i informatyki,
                również pod kątem matury. Najbardziej cieszy mnie moment, w którym komuś „zaskakuje”
                i nagle kod przestaje być czarną magią.
            </p>

            <h3>Jak pracuję</h3>
            <ul class="check-list">
                <li><strong>Prostym językiem.</strong> Nie zasypuję żargonem, tłumaczę tak, żeby zrozumieć, a nie tylko przepisać.</li>
                <li><strong>Uczciwie.</strong> Zakres i cena ustalone przed startem. Jeśli coś jest poza moimi możliwościami, powiem to od razu.</li>
                <li><strong>Po Twojemu.</strong> Online lub na żywo, w tempie, które Ci odpowiada.</li>
                <li><strong>Do końca.</strong> Przy projektach nie oddaję samego kodu, tylko tłumaczę, jak działa, żebyś mógł go obronić i rozwijać.</li>
            </ul>

            <div class="about-cta">
                <a href="{{ route('kontakt') }}" class="btn btn-primary">Napisz do mnie</a>
                <a href="{{ route('oferta') }}" class="btn btn-ghost-dark">Zobacz ofertę</a>
            </div>
        </div>
    </div>
</section>

@endsection
