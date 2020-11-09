<!DOCTYPE html>
<!--
Made for F3 band
https://TheBandF3.com
By Achyut Neupane
https://www.facebook.com/ThisIsAchyut
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - F3</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#">F3</a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
                aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarDefault">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link" href="#top">Home</a>
                    <a class="nav-link" href="#profile">Profile</a>
                    <a class="nav-link" href="#member">Members</a>
                    <a class="nav-link" href="#contact">Contact</a>
                </div>
            </div>
        </div>
    </nav>
</head>
<body>
    @yield('content')
</body>
<div class="footer p-1">
    &copy; {{ now()->year }} | <a href="{{ route('index') }}">The Band F3</a><br>
    Developed by <a href="https://fb.me/ThisIsAchyut">Achyut</a>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('js/main.js') }}" defer></script>
</html>
