<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="shortcut icon" href="{{ asset('images/logo/img10.png') }}" type="image/x-icon"/>


        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}



    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"/> --}}
    
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous" defer></script> --}}


    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">
      
</head>

<body>
    <header>
        {{-- <img class="log" id="log" src="{{asset('logo/img10.png')}}" alt=""> --}}
        <a href="{{ route('main.apropos')}}" class="logo"><span>O</span>'Cnamo</a>
        <div class="menutoggle">
            <ul class="navbar">
                <li><a href="{{ route('main.accueil') }}" href="#banniere" onclick="toggleMenu();">Accueil</a></li>
                <li><a href="{{ route('main.apropos') }}" href="#apropos" onclick="toggleMenu()">A propos de nous</a></li>
                <li><a href="{{ route('main.menu') }}" href="#menu" onclick="toggleMenu();">Menu</a></li>
                <li><a href="{{ route('main.cartemenu') }}">Carte</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
                <li><a href="{{ route('reservation') }}">Réservation</a></li>
            </ul>
        </div>
    </header>
    @yield('content')

    <footer>

        <div class="copyright">
            <p>Copyright &copy;{{ date('Y') }} &middot; <a href="{{ route('main.apropos') }}">Ocnamo Restaurant</a> .Tous droits Résevés &middot; Création par <b> <a href="{{route('contact')}}"
                target="_blank"> Ahmed Btina</a> </b></p>
        </div>

    </footer>
    
    </body>
    </html>
