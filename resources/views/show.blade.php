@extends('layouts.app')

@section('content')
<div class="container-show">
        <h2>{{ $event->title }}</h2>
        
        <div class="content-show">
            <div class="eveniment-container-show">
                <img class="img-show" src="{{ $event->image_url }}" alt="{{ $event->title }}" style="max-width: 100%; height: auto;">
                <div class='eveniment-show'>
        <p><strong>Data si ora:</strong> {{ $event->start_datetime }}</p>
        <p><strong>Preț:</strong> {{ $event->ticket_price }}</p>
        <p><strong>Descriere:</strong> {{ $event->description }}</p>
        </div>
    </div>
    <a class="buton-events" href="{{ route('events') }}">Inapoi</a>
    </div>

</div>
@endsection

