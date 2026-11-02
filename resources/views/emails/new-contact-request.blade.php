@php($r = $contactRequest)
<!doctype html>
<html lang="pl">
<body style="font-family: Arial, sans-serif; color: #222; line-height: 1.5;">
    <h2 style="margin: 0 0 16px;">Nowe zgłoszenie z formularza</h2>

    <table cellpadding="6" style="border-collapse: collapse;">
        <tr><td><strong>Imię:</strong></td><td>{{ $r->name }}</td></tr>
        <tr><td><strong>E-mail:</strong></td><td><a href="mailto:{{ $r->email }}">{{ $r->email }}</a></td></tr>
        @if ($r->phone)
            <tr><td><strong>Telefon:</strong></td><td>{{ $r->phone }}</td></tr>
        @endif
        <tr><td><strong>Kto:</strong></td><td>{{ $r->whoLabel() }}</td></tr>
        <tr><td><strong>Temat:</strong></td><td>{{ $r->topicLabel() }}</td></tr>
    </table>

    <p style="margin: 16px 0 4px;"><strong>Wiadomość:</strong></p>
    <div style="white-space: pre-line; background: #f4f4f4; padding: 12px; border-radius: 6px;">{{ $r->message }}</div>

    <p style="margin-top: 20px;">
        <a href="{{ route('panel') }}">Otwórz panel zgłoszeń</a>
        &middot; Odpowiedz na tego maila, żeby napisać bezpośrednio do klienta.
    </p>
</body>
</html>
