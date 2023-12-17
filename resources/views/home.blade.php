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
            <li><a href="{{ route('sponsors') }}">Sponsori și Parteneri</a></li>
            <li><a href="{{ route('events') }}">Evenimente</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
    </div>

    <div class="top-right-menu">
        <a href="{{ route('home') }}">Acasă</a>
        <a href="{{ route('contul_meu') }}">Contul meu</a>
        <a href="#">Coș</a>
        
    </div>

<script>
        
    function toggleMenu() {
        var menu = document.querySelector('.hamburger-menu');
        menu.style.display = (menu.style.display === 'none' || menu.style.display === '') ? 'block' : 'none';
        console.log("Butonul a fost apăsat!")
    }

</script>

</header>
<div class="image-section">
            <img src="{{ asset('home.jpeg') }}" id="backdrop" alt="Imagine Eveniment">            
            <!-- <button class="see-events-button">Vezi Evenimente</button> -->
            <a href="{{ route('events') }}" class="see-events-button">Vezi Evenimente</a>

</div>

@endsection
