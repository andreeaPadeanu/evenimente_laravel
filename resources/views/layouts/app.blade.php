<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Eventica')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-GLhlTQ8iBZs1HgvjEm+LbJsRMwEpCkBe5c9wF9pxuH2txFNOg4lBdA9Dk9MocBo" crossorigin="anonymous">

</head>
<body>
    <header>
        
    </header>

    <div class="container">
        @yield('content')
        @yield('contact')
    </div>

    <footer>
        
    </footer>

    
</body>
</html>
