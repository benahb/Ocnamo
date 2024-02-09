<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - @yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('logo/img.png') }}" type="image/x-icon" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
        rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Nova+Script&display=swap" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Librairies Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Configuration Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!--  Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous" defer>
    </script>


    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <header>
        {{-- <img class="log" id="log" src="{{asset('logo/img10.png')}}" alt=""> --}}
        <img id="logpng" src="{{asset('logo/img 2.png')}}" alt="">
        <a href="{{ route('main.apropos') }}" class="logo"><span>O</span>cnamo</a>
        <div class="menutoggle">
            <ul class="navbar">
                <li><a href="{{ route('main.accueil') }}" href="#banniere" onclick="toggleMenu();">Accueil</a></li>
                <li><a href="{{ route('main.apropos') }}" href="#apropos" onclick="toggleMenu()">A propos de nous</a>
                </li>
                <li><a href="{{ route('main.menu') }}" href="#menu" onclick="toggleMenu();">Menu</a></li>
                <li><a href="{{ route('main.cartemenu') }}">Carte</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
                <li><a href="{{ route('reservation') }}">Réservation</a></li>
                <li><a href="{{ route('main.photoAmbiance') }}">Gallery photos</a></li>
            </ul>
        </div>
    </header>
    @yield('content')

    <footer>
        <section>
            <div class="container-fluid bg--bs-info-border-subtle text-light footer pt-5 mt-5 wow fadeIn"
                data-wow-delay="0.1s">
                <div class="container py-5">
                    <div class="row g-5">
                        <div class="col-lg-3 col-md-6">
                            <h4 class="section-title ff-info text-start text-info fw-normal mb-4">Company</h4>
                            <a class="btn btn-link" href="{{ route('main.apropos') }}">Apropos de nous</a>
                            <a class="btn btn-link" href="{{ route('contact') }}">Contactez-nous</a>
                            <a class="btn btn-link" href="{{ route('reservation') }}">Reservation</a>
                            <a class="btn btn-link" href="">Privacy Policy</a>
                            <a class="btn btn-link" href="">Termes & Condition</a>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <h4 class="section-title ff-info text-start text-info fw-normal mb-4">Contact</h4>
                            <p class="text-secondary mb-2"><i class="fa fa-map-marker-alt me-3"></i>5 Boulevard Louis
                                XVI, 5900 Lille, France</p>
                            <p class="text-secondary mb-2"><i class="fa fa-phone-alt me-3"></i>+0033 345 67890</p>
                            <p class="text-secondary mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                            <div class="d-flex pt-2">
                                <a class="btn btn-outline-light btn-social" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i
                                        class="fab fa-youtube"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <h4 class="section-title ff-info text-start text-info fw-normal mb-4">Ouverture</h4>
                            <h5 class="text-secondary fw-normal">Lundi - Samedi</h5>
                            <p class="text-secondary">09AM - 09PM</p>
                            <h5 class="text-secondary fw-normal">Dimanche</h5>
                            <p class="text-secondary">10AM - 08PM</p>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <h4 class="section-title ff-info text-start text-info fw-normal mb-4">Newsletter</h4>
                            <p class="text-secondary">Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                            <div class="position-relative mx-auto" style="max-width: 400px;">
                                <input class="form-control border-info w-100 py-3 ps-4 pe-5" type="text"
                                    placeholder="Votre email">
                                <button type="button"
                                    class="btn btn-info py-2 position-absolute top-0 end-0 mt-2 me-2">Inscription</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="copyright">
                        <div class="row">
                            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                                &copy; <a class="border-bottom" href="#">OCnamo restaurant</a>, Tous Droit
                                Réservés.

                            </div>
                            <div class="col-md-6 text-center text-md-end">
                                <div class="footer-menu">
                                    <a href="{{ route('main.accueil') }}">Accueil</a>
                                    <a href="">Cookies</a>
                                    <a href="">Aides</a>
                                    <a href="">FQAs</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>Copyright &copy;{{ date('Y') }} &middot; <a href="{{ route('main.apropos') }}">Ocnamo
                        Restaurant</a> .Tous droits Résevés &middot; Création par <b> <a href="{{ route('contact') }}"
                            target="_blank"> Ahmed Btina</a> </b></p>
            </div>
        </section>

    </footer>
    <a href="#" class="btn btn-lg btn-info btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
