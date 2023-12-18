@extends('layouts.app')

@section('content')

<div class="login">
        <h2>CONTUL MEU</h2>
        <br><br>

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



        </form>

    </div>
@endsection
