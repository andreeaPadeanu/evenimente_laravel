@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Evenimente</h2>
    <div class="content">
        <div class="eveniment-container">
            @foreach($events as $event)
                <div class='eveniment'>
                    <img src="{{ $event->image_url }}" alt="{{ $event->title }}">
                    <a href="{{ route('show', ['event' => $event]) }}">Detalii</a>
                </div>
            @endforeach
        </div>
    </div>
</div>
