# Wdrożenie OgarnijKod na cba.pl (plan Pro, bez SSH)

cba.pl nie daje SSH ani Composera, więc wszystko przygotowujesz lokalnie na XAMPP
i wgrywasz przez FTP. Poniżej cała procedura od zera.

## 1. Panel cba.pl

1. Ustaw wersję PHP na **8.4** (lub najnowszą dostępną, min. 8.2). Lokalnie masz 8.5,
   dlatego Composer uruchamiaj z `--ignore-platform-req=php`, patrz krok 2.
2. Utwórz bazę MySQL. Zapisz: nazwę bazy, użytkownika, hasło, host (zwykle `localhost`).
3. Podepnij domenę. Jeśli panel pozwala wskazać katalog dla domeny, wpisz `public`.
   Jeśli nie, zostaw domyślny. Plik `.htaccess` w głównym katalogu projektu
   przekieruje ruch do `public/` automatycznie.
4. Włącz SSL (Let's Encrypt), jeśli jest w panelu.

## 2. Przygotowanie plików lokalnie (PowerShell w katalogu projektu)

```
D:\xampp\php\php.exe composer.phar install --no-dev --optimize-autoloader --ignore-platform-req=php
D:\xampp\php\php.exe artisan view:clear
D:\xampp\php\php.exe artisan config:clear
D:\xampp\php\php.exe artisan route:clear
```

Po wgraniu na serwer wróć do pełnej instalacji lokalnie (`install` bez `--no-dev`),
jeśli chcesz dalej używać narzędzi deweloperskich.

## 3. Plik .env na serwer

Skopiuj `deploy/env.production.example` jako `.env` (lokalnie, w osobnym miejscu),
uzupełnij dane bazy z panelu cba.pl, wpisz `APP_URL` z `https://`.
`APP_KEY` skopiuj z lokalnego `.env` (linia `APP_KEY=base64:...`).

## 4. Wgranie przez FTP (np. FileZilla)

Wgraj do katalogu domeny **wszystko** z projektu oprócz:

- `.git/`, `node_modules/` (nie ma), `tests/`, `deploy/`
- lokalnego `.env` (wgraj ten produkcyjny z kroku 3)
- `storage/logs/*.log`, `storage/framework/cache/data/*`, `storage/framework/views/*`

Katalogi `storage/` i `bootstrap/cache/` muszą być zapisywalne (zwykle są,
jeśli nie, ustaw w FTP uprawnienia 755 lub 775 na te katalogi).

Katalog `vendor/` ma kilkanaście tysięcy plików, pierwsze wgranie trwa.
Przy aktualizacjach wgrywaj tylko to, co zmieniłeś (`app/`, `resources/`,
`routes/`, `public/css`, `public/js`, `config/`).

## 5. Baza danych

W phpMyAdmin na cba.pl zaimportuj po kolei:

1. `deploy/schema.sql` – struktura tabel
2. `deploy/dane-startowe.sql` – lista wykonanych migracji i konto admina
   (plik jest w .gitignore, masz go tylko lokalnie; wygeneruj ponownie poleceniem
   z sekcji „Odświeżenie dumpu”, jeśli go nie ma)

Po imporcie zaloguj się na stronie i zmień hasło admina.

## 6. Sprawdzenie

- Otwórz stronę główną, `/kontakt`, wyślij testowe zgłoszenie, sprawdź `/panel`.
- Jeśli widzisz błąd 500: wgraj na chwilę `.env` z `APP_DEBUG=true`, zobacz komunikat,
  popraw, przywróć `APP_DEBUG=false`. Logi są w `storage/logs/laravel.log`.
- Jeśli strona nie ma stylów: `APP_URL` w `.env` musi być dokładnie adresem strony
  (z `https://`, bez końcowego `/`).

## Odświeżenie dumpu bazy (lokalnie)

```
D:\xampp\mysql\bin\mysqldump.exe -u root --no-data --skip-comments --compact dotcom > deploy\schema.sql
D:\xampp\mysql\bin\mysqldump.exe -u root --no-create-info --skip-comments --compact dotcom migrations users > deploy\dane-startowe.sql
```

## Kolejne migracje (nowe tabele) bez SSH

Zrób migrację lokalnie (`artisan migrate`), wygeneruj dump jak wyżej
i w phpMyAdmin na serwerze wykonaj tylko `CREATE TABLE` nowej tabeli
oraz dodaj wiersz do tabeli `migrations`. Albo prościej: wyeksportuj z lokalnego
phpMyAdmin tylko tę jedną tabelę i zaimportuj na serwerze.
