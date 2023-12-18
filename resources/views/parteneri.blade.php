@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Le mulțumim partenerilor noștri pentru colaborare!</h2>

    <div class="slideshow-container">
        @foreach($partners as $key => $partner)
            <div class="mySlides">
                <img src="{{ $partner->image_url }}" alt="{{ $partner->name }}">
                <div class="text">
                    <h3>{{ $partner->name }}</h3>
                    <p>{{ $partner->description }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>

<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) { slideIndex = 1 }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 5000); 
    }
</script>

@endsection