<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])


        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}


    <link rel="shortcut icon" href="{{ asset('images/logo/img10.png') }}" type="image/x-icon"/>

    {{-- <link rel="stylesheet" --}}

    {{-- href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" --}}
    {{-- integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" --}}
    {{-- crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}


    {{-- <link rel="stylesheet" href="ressource"> --}}

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">

</head>

<body>
    <header>
        <a href="{{ route('main.contact')}}" class="logo"><span>O</span>cnamo</a>
        <div class="menutoggle" onclick="toggleMenu();"></div>
        <ul class="navbar">
            <li><a href="{{ route('main.accueil') }}">Accueil</a></li>
            <li><a href="{{ route('main.apropos') }}">A propos de nous</a></li>
            <li><a href="{{ route('main.menu') }}">Menu</a></li>
            <li><a href="{{ route('main.cartemenu') }}">Carte</a></li>
            <li><a href="{{ route('main.contact') }}">contact</a></li>
            <li><a href="{{ route('main.reservation') }}">Réservation</a></li>
        </ul>
    </header>
    @yield('content')

    <footer>

        <div class="copyright">
            <p>Copyright {{ date('Y') }} &middot; <a href="{{ route('main.apropos') }}">Ocnamo Restaurant</a> .Tous droits Résevés</p>
        </div>

    </footer>


   <script>


   </script>

        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> --}}
    </body>
    </html>
