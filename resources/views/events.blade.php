
@extends('layouts.app')

@section('content')

<!-- @foreach($events as $event)
<div class="event">
            <h3>{{ $event->title }}</h3>
            <p>{{ $event->description }}</p>
            <p>Data și Ora de început: {{ $event->start_datetime }}</p>
            <p>Pret: {{ $event->ticket_price }}</p>
        </div>
@endforeach -->
<div class="container-events">
    <h2>Evenimente</h2>
    <div class="content">
        <div class="eveniment-container-events">
            @foreach($events as $event)
                <div class='eveniment-events'>
                <h5>{{ $event->title }}</h5>
                    <img class="img-events" src="{{ $event->image_url }}" alt="{{ $event->title }}">
                    <a class="buton-events" href="{{ route('show', ['event' => $event]) }}">Detalii</a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

