@extends('layouts.app')
@section('content')

<div class="container-sponsori">
    <h2>Dorim să le mulțumim sponsorilor noștrii pentru generozitatea lor!</h2>

    <div class="slideshow-container">
        @foreach($sponsors as $key => $sponsor)
            <div class="mySlides">
                <img class="img-sponsori" src="{{ $sponsor->image_url }}" alt="{{ $sponsor->name }}">
                <div class="text-sponsori">
                    <h3>{{ $sponsor->name }}</h3>
                    <p>{{ $sponsor->description }}</p>
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