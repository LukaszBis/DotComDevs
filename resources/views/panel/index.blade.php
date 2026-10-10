@extends('partials.layout')

@section('title', 'Panel zgłoszeń')

@section('content')

<section class="page-head page-head-sm">
    <div class="container">
        <p class="eyebrow">Panel</p>
        <h1>Zgłoszenia</h1>
        <p>Wiadomości wysłane przez formularz kontaktowy.</p>
    </div>
</section>

<section class="section">
    <div class="container">

        <div class="stats">
            <a href="{{ route('panel') }}" class="stat {{ $status === null ? 'active' : '' }}">
                <span class="stat-label">Wszystkie</span>
                <span class="stat-value">{{ $counts->sum() }}</span>
            </a>
            @foreach ($statuses as $key => $label)
                <a href="{{ route('panel', ['status' => $key]) }}" class="stat stat-{{ $key }} {{ $status === $key ? 'active' : '' }}">
                    <span class="stat-label">{{ $label }}</span>
                    <span class="stat-value">{{ $counts[$key] ?? 0 }}</span>
                </a>
            @endforeach
        </div>

        @if ($requests->isEmpty())
            <div class="empty">
                <h2>Brak zgłoszeń</h2>
                <p>Kiedy ktoś wyśle formularz na stronie kontaktu, pojawi się tutaj.</p>
            </div>
        @else
            <div class="request-list">
                @foreach ($requests as $item)
                    <article class="card request">
                        <header class="request-head">
                            <div>
                                <h3>{{ $item->name }} <span class="pill pill-{{ $item->status }}">{{ $item->statusLabel() }}</span></h3>
                                <p class="request-meta">
                                    <a href="mailto:{{ $item->email }}">{{ $item->email }}</a>
                                    @if ($item->phone) · <a href="tel:{{ $item->phone }}">{{ $item->phone }}</a> @endif
                                    · {{ $item->created_at->format('d.m.Y H:i') }}
                                </p>
                            </div>
                            <div class="request-tags">
                                <span class="tag">{{ $item->whoLabel() }}</span>
                                <span class="tag tag-accent">{{ $item->topicLabel() }}</span>
                            </div>
                        </header>

                        <p class="request-message">{!! nl2br(e($item->message)) !!}</p>

                        <footer class="request-actions">
                            <form method="POST" action="{{ route('panel.update', $item) }}" class="inline-form">
                                @csrf
                                @method('PATCH')
                                <select name="status" aria-label="Status zgłoszenia">
                                    @foreach ($statuses as $key => $label)
                                        <option value="{{ $key }}" {{ $item->status === $key ? 'selected' : '' }}>{{ $label }}</option>
                                    @endforeach
                                </select>
                                <button type="submit" class="btn btn-ghost-dark btn-sm">Zapisz status</button>
                            </form>

                            <a href="mailto:{{ $item->email }}?subject={{ rawurlencode('Odp: ' . $item->topicLabel()) }}" class="btn btn-primary btn-sm">Odpowiedz mailem</a>

                            <form method="POST" action="{{ route('panel.destroy', $item) }}" class="inline-form" onsubmit="return confirm('Na pewno usunąć to zgłoszenie?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Usuń</button>
                            </form>
                        </footer>
                    </article>
                @endforeach
            </div>

            <div class="pagination-wrap">
                {{ $requests->links() }}
            </div>
        @endif

    </div>
</section>

@endsection
