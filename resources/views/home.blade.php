@extends('layouts.app')

@section('content')
    <!-- <header>
    <h3 class="title">Eventica</h3>
        <div class="icon" onclick="toggleMenu()">
            <div class="bar "></div>
            <div class="bar "></div>
            <div class="bar "></div>
        </div>
    <div class="hamburger-menu">
        <ul id="hamburger-menu">
            <li><a href="categorii.php">Categorii</a></li>
            <li><a href="cos.php">Coșul meu</a></li>
            <li><a href="notificari.php">Notificări</a></li>
        </ul>
    </div>
        <div class="menu-container">
            <div class="menu-wrapper">
                <div class="hamburger-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div> 
            <ul class="top-right-menu">
                <li><a href="{{ route('sponsors') }}">Sponsori și Parteneri</a></li>
                <li><a href="{{ route('events') }}">Evenimente</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
            <div class="user-menu">
                <a href="#">Contul meu</a>
                <a href="#">Coș</a>
                <a href="{{ route('home') }}">Acasă</a>
            </div>
        </div>
    </header>-->

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
        <a href="#">Contul meu</a>
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
    <button class="see-events-button">Vezi Evenimente</button>
</div>
@endsection
