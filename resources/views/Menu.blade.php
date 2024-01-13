@extends('base')

@section('title' , 'menu')

@section('content')

<body>
<section class="menu" id="menu">
        <div class="titre">
            <h2 class="titre-text"><span>M</span>enu</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae. Lorem, ipsum dolor sit amet consectetur adipisicing elit.   </p>
        </div>

        <div class="contenu">
            <div class="box">
                <div class="imbox">
                    <img src="{{ asset('/images\img\Entrees\2.jpg') }}" alt="">
                </dIV>
                <div class="text">
                    <a href="{{ route('main.cartemenu') }}" class="btn">Petit Dejeuner</a>
                </div>
            </div>

            <div class="box">
                <div class="imbox">
                    <img src="{{ asset('/images\img\Plats\imageedit_10_5656675552.jpg') }}" alt="">
                </DIV>
                <div class="text">
                    <h3>Les salades du chef</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="{{ asset('/images\img\Entrees\7.jpg') }}" alt="">
                </DIV>
                <div class="text">
                    <h3>Entrée</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="{{ asset('/images\img\Plats\imageedit_1_2772269685.jpg') }}" alt="">
                </DIV>
                <div class="text">
                    <h3>Plat Principal</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="{{ asset('/images\img\Desserts\d5.jpg') }}" alt="">
                </DIV>
                <div class="text">
                    <h3>Dessert</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="./b1.jpg" alt="">
                </DIV>
                <div class="text">
                    <h3>Boisson</h3>
                </div>
            </div>
        </div>
        </div>
        <div class="titre">
            <a href="{{ route('main.cartemenu')}}" class="btn1">Voir la carte</a>
        </div>
    </section>
    <section class="expert" id="expert">
        <div class="titre">
            <h2 class="titre-text">Les<span> C</span>hefs</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae. </p>
        </div>
        <div class="contenu">
            <div class="box">
                <div class="imbox">
                    <img src="{{ asset('/images/img/experts/4.jpg') }}" alt="">
                </DIV>
                <div class="text">
                    <h3>Michel Leroi</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="{{ asset('/images/img/experts/2.jpg') }}" alt="">
                </DIV>
                <div class="text">
                    <h3>Yohan King</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="{{ asset('/images/img/experts/3.jpg') }}" alt="">
                </DIV>
                <div class="text">
                    <h3>Danzel Sokolo</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="{{ asset('/images/img/experts/1.jpg') }}" alt="">
                </DIV>
                <div class="text">
                    <h3>Albert Stephan</h3>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection

