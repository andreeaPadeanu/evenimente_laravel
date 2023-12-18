@extends('layouts.app')

@section('content')
<div class="image-section">
            <img src="{{ asset('home.jpeg') }}" id="backdrop" alt="Imagine Eveniment">            
            <a href="{{ route('events') }}" class="see-events-button">Vezi Evenimente</a>
</div>

@endsection
