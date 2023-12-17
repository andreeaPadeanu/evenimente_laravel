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
            <li><a href="{{ route('contact.index') }}">Contact</a></li>
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
<div class="login">
        <h2>CONTUL MEU</h2>
        <br><br>
        <!-- <p>Nume: {{ $user->name }}</p>
        <p>Email: {{ $user->email }}</p>
        <p>Telefon: {{ $user->phone_number }}</p> -->

        <form action="{{ route('contul_meu') }}" method="POST">
            @csrf
            @method('PUT')

            <label for="name">Nume:</label>
            <input type="text" name="name" value="{{ $user->name }}">

            <label for="email">Email:</label>
            <br>
            <input type="text" name="email" value="{{ $user->email }}">
            <br>
            <label for="phone_number">Telefon:</label>
            <input type="text" name="phone_number" value="{{ $user->phone_number }}">


            <!-- <button type="submit">Actualizează</button> -->

        </form>

    </div>
@endsection
