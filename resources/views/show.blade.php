@extends('layouts.app')

@section('content')
<div class="container">
        <h2>{{ $event->title }}</h2>
        
        <div class="content">
            <div class="eveniment-container">
                <img src="{{ $event->image_url }}" alt="{{ $event->title }}" style="max-width: 100%; height: auto;">
                <div class='eveniment'>
        <p><strong>Data:</strong> {{ $event->date }}</p>
        <p><strong>Ora:</strong> {{ $event->time }}</p>
        <p><strong>Locație:</strong> {{ $event->location }}</p>
        <p><strong>Preț:</strong> {{ $event->price }}</p>
        <p><strong>Descriere:</strong> {{ $event->description }}</p>
        <a href="#">Adaugă în coș</a>
        </div>
    </div>
    </div>
   </div>