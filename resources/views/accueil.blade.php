@extends('base')

@section('title', 'accueil')

@section('content')
    </head>

    <body>

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

                <div class="actus">
                    <img src="{{ asset('img/bg-hero.jpg') }}" alt="">
                    <h1>Nouvelle Actu</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipiselit. Dolor, rem quas eaque aliquid itaque
                        officiis architecto vel. Non sequi aliquid reprehenderit dolorum ipsam ipsa ab quisquam iste
                        natus doloremque? Magnam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti nobis
                        nesciunt officia consequuntur fugiat id incidunt rem, enim asperiores. Eum omnis porro deleniti
                        saepe doloremque. Corrupti ab quam quia suscipit! Lorem ipsum dolor, sit amet consectetur
                        adipisicing elit. Suscipit nihil quidem magnam voluptatum dolores eaque quam saepe! Natus, aut
                        impedit. Sint dolorum assumenda praesentium vitae repellendus ad illum nulla accusantium?</p
                    
                        <a href=""><button class="btn-btn" type="submit">Lire plus</button></a>
                
                </div>
                <div class="actus">
                    <img src="{{ asset('img/bg-hero.jpg') }}" alt="">
                    <h1>Nouvelle Actu</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipiselit. Dolor, rem quas eaque aliquid itaque
                        officiis architecto vel. Non sequi aliquid reprehenderit dolorum ipsam ipsa ab quisquam iste
                        natus doloremque? Magnam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti nobis
                        nesciunt officia consequuntur fugiat id incidunt rem, enim asperiores. Eum omnis porro deleniti
                        saepe doloremque. Corrupti ab quam quia suscipit! Lorem ipsum dolor, sit amet consectetur
                        adipisicing elit. Suscipit nihil quidem magnam voluptatum dolores eaque quam saepe! Natus, aut
                        impedit. Sint dolorum assumenda praesentium vitae repellendus ad illum nulla accusantium?</p>
                    
                        <a href=""><button class="btn-btn" type="submit">Lire plus</button></a>
                
                </div>

                <div class="actus">
                    <img src="{{ asset('img/bg-hero.jpg') }}" alt="">
                    <h1>Nouvelle Actu</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, rem quas eaque aliquid itaque
                        officiis architecto vel. Non sequi aliquid reprehenderit dolorum ipsam ipsa ab quisquam iste natus
                        doloremque? Magnam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, optio itaque
                        asperiores assumenda, consequatur sed pariatur amet eum rem porro quam ex quaerat fugit, iure
                        nostrum voluptate laboriosam. Hic, tempore. Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. Minima, quia vel ducimus reiciendis omnis, exercitationem veniam impedit tempore, amet libero
                        voluptas magnam velit quas eaque culpa in! Tempore, nobis porro.</p>

                    <a href=""><button class="btn-btn" type="submit">Lire plus</button></a>

                </div>
                
                @foreach ($actus as $actu)
                    <ul>
                        <li>{{ $actu->contenu }} ({{ $actu->date_publication }})</li>
                    </ul>
                @endforeach

            </div>

        </section>


    @endsection
