@extends('base')

@section('title', 'accueil')

@section('content')
    </head>

    <body>
        <section id="top-header">
            <div id="header-slider" class="carousel slide" data-ride="carousel">
                
                <ol class="carousel-indicators">
                    <li data-target="#header-slider" data-slide-to="0" class="active"></li>
                    <li data-target="#header-slider" data-slide-to="1"></li>
                    <li data-target="#header-slider" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="fill" style="background-image:url('img/slider-1.jpg');"></div>
                        <div class="carousel-caption">
                            <h2 class="animated fadeInLeft">Cuisine locale et fraiche</h2>
                            <p class="animated fadeInUp">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                            <p class="animated fadeInUp"><a href="#" class="btn btn-transparent btn-rounded btn-large">Lire Plus</a></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="fill" style="background-image:url('img/slider-2.jpg');"></div>
                        <div class="carousel-caption">
                            <h2 class="animated fadeInDown">Rang Comfortable</h2>
                            <p class="animated fadeInUp">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                            <p class="animated fadeInUp"><a href="#" class="btn btn-transparent btn-rounded btn-large">Lire Plus</a></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="fill" style="background-image:url('img/slider-3.jpg');"></div>
                        <div class="carousel-caption">
                            <h2 class="animated fadeInRight">Espace Agréable</h2>
                            <p class="animated fadeInRight">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                            <p class="animated fadeInRight"><a href="#" class="btn btn-transparent btn-rounded btn-large">Lire Plus</a></p>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#header-slider" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Précedent</span>
                </a>
                <a class="carousel-control-next" href="#header-slider" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Suivant</span>
                </a>

            </div>
        </section>

        <section class="banniere" id="banniere">

            <img src="{{ asset('/images\bg-img\2.jpg') }}" alt="image bg">
            <div class="contenu">
                <h2>Decouvrez nos plats authentiques</h2>
                <p>L'Ocnamo vous invite à un savoureux voyage au coeur du Cameroun authentique.
                    Goutez les trésors gustatif de la cuisine camerounaise au sein d'une ambiance contemporain. "Voyage
                    culinaire au Cameroun : une expérience à chaque bouchée.". "Savourer l'authenticité camerounaise, une
                    bouchée à la fois." "Chez O'Cnamo, chaque repas est un voyage vers le Cameroun. </p>
                <a href="{{ route('main.menu') }}" class="btn1">Notre Menu</a>
                <a href="{{ route('reservation') }}" class="btn2">Réservation</a>
            </div>
            <div class="banniere2"></div>
        </section>
        <section class="second-banniere">
            <div></div>
            <div></div>
            <div></div>
            <div></div>

        </section>
        <section>
            <div class="block-actu">
                @foreach ($actus as $actu)
                <div class="actus">
                    <img src="{{ asset('images/291097 (1).jpg') }}" alt="">
                    <h1>La Soirée Piano Bar</h1>
                    <p>{{ $actu->contenu }}</p>
                    <p>({{ $actu->date_publication }})</p>
                        <a href=""><button class="btn-btn" type="submit">Lire plus</button></a>
                
                </div>
                @endforeach
                @foreach ($actus as $actu)
                <div class="actus">
                    <img src="{{ asset('images/291972.jpg') }}" alt="">
                    <h1>La Saison Camerounaise</h1>
                    <p>{{ $actu->contenu }}</p>
                    <p>({{ $actu->date_publication }})</p>
                        <a href=""><button class="btn-btn" type="submit">Lire plus</button></a>
                
                </div>
                @endforeach

                @foreach ($actus as $actu)
                <div class="actus">
                    <img src="{{ asset('images/560916.jpg') }}" alt="">
                    <h1>La Saga N'dolé</h1>
                    <p>{{ $actu->contenu }}</p>
                    <p>({{ $actu->date_publication }})</p>
                        <a href=""><button class="btn-btn" type="submit">Lire plus</button></a>
                
                </div>
                @endforeach
                @foreach ($actus as $actu)
                <div class="actus">
                    <img src="{{ asset('images/366291.jpg') }}" alt="">
                    <h1>La Nuit du Jazz Camerounaise</h1>
                    <p>{{ $actu->contenu }}</p>
                    <p>({{ $actu->date_publication }})</p>
                        <a href=""><button class="btn-btn" type="submit">Lire plus</button></a>
                
                </div>
                @endforeach
            </div>

        </section>


    @endsection
