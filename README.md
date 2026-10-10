# OgarnijKod

Strona osobista: proste strony internetowe, pomoc w projektach studenckich i Excelu,
korepetycje z programowania i informatyki. Laravel 12, bez kroku budowania frontendu
(czysty CSS i JS w `public/`).

Nazwa, hasło marki, e-mail, telefon i miasto są w jednym miejscu: `config/site.php`.
Logo: `public/images/logo.svg` (sam znak), `public/images/logo-full.svg` (znak z napisem), `public/favicon.svg`.

## Uruchomienie na XAMPP

1. W `D:\xampp\php\php.ini` musi być włączone `extension=openssl` (oraz `mbstring`, `pdo_mysql`, `fileinfo`).
2. VirtualHost w `D:\xampp\apache\conf\extra\httpd-vhosts.conf` kieruje `http://localhost` na `D:/xampp/htdocs/DotComDevs/public`.
3. Po każdej zmianie w `php.ini` lub konfiguracji Apache zrestartuj Apache w XAMPP Control Panel.
4. Baza MySQL `dotcom` (ustawienia w `.env`), potem:

```
D:\xampp\php\php.exe artisan migrate
D:\xampp\php\php.exe artisan db:seed --class=AdminUserSeeder
```

Strona: http://localhost

## Panel zgłoszeń

Formularz na `/kontakt` zapisuje zgłoszenia w tabeli `contact_requests`.
Przegląd i zmiana statusu: `/panel` (wymaga konta z rolą `admin`).

Seeder `AdminUserSeeder` tworzy konto administratora `lukasz.bis22@gmail.com` (hasło w seederze).
Zmień hasło po pierwszym logowaniu, np.:

```
D:\xampp\php\php.exe artisan tinker --execute="App\Models\User::where('email','lukasz.bis22@gmail.com')->update(['password'=>bcrypt('NOWE_HASLO')]);"
```

## Struktura

- `routes/web.php` – strony: start, o mnie, oferta, kontakt, logowanie, panel
- `app/Http/Controllers/ContactController.php` – formularz kontaktowy
- `app/Http/Controllers/PanelController.php` – panel zgłoszeń (admin)
- `app/Http/Controllers/BlogController.php` – blog (obecnie wyłączony, trasy zakomentowane w `routes/web.php`)
- `resources/views/` – widoki Blade, wspólny layout w `partials/layout.blade.php`
- `public/css/site.css`, `public/js/site.js` – style i skrypt strony
