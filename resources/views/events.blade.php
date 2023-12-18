@extends('layouts.app')

@section('content')
    <header class="header">
        <h3 class="title">Eventica</h3>
        
        <div class="icon" onclick="toggleMenu()">
            <div class="bar "></div>
            <div class="bar "></div>
            <div class="bar "></div>
        </div>
    <div class="hamburger-menu">
        <ul id="hamburger-menu">
            <li><a href="{{ route('sponsors') }}">Sponsori</a></li>
            <li><a href="{{ route('parteneri') }}">Parteneri</a></li>
            <li><a href="{{ route('events') }}">Evenimente</a></li>
            <li><a href="{{ route('contact.index') }}">Contact</a></li>
        </ul>
    </div>

    <div class="top-right-menu">
        <a href="{{ route('home') }}">Acasă</a>
        <a href="{{ route('contul_meu') }}">Contul meu</a>
        <!-- <a href="#">Coș</a> -->
        
    </div>

<script>
        
    function toggleMenu() {
        var menu = document.querySelector('.hamburger-menu');
        menu.style.display = (menu.style.display === 'none' || menu.style.display === '') ? 'block' : 'none';
        console.log("Butonul a fost apăsat!")
    }

</script>

</header>
@foreach($events as $event)
<div class="event">
            <h3>{{ $event->title }}</h3>
            <p>{{ $event->description }}</p>
            <p>Data și Ora de început: {{ $event->start_datetime }}</p>
            <p>Pret: {{ $event->ticket_price }}</p>
        </div>
@endforeach