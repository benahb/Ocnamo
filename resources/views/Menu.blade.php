@extends('base')

@section('title' , 'menu')

@section('content')

<body>
<section class="menu" id="menu">
        <div class="titre">
            <h2 class="titre-text"><span>M</span>enu</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae. </p>
        </div>

        <div class="contenu">
            <div class="box">
                <div class="imbox">
                    <img src="./images\img\Entrees\2.jpg" alt="">
                </dIV>
                <div class="text">
                    <h3>Petit Dejeuner</h3>
                </div>
            </div>

            <div class="box">
                <div class="imbox">
                    <img src="./images\img\Plats\imageedit_10_5656675552.jpg" alt="">
                </DIV>
                <div class="text">
                    <h3>Les salades du chef</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="./images\img\Entrees\7.jpg" alt="">
                </DIV>
                <div class="text">
                    <h3>Entrée</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="./images\img\Plats\imageedit_1_2772269685.jpg" alt="">
                </DIV>
                <div class="text">
                    <h3>Plat Principal</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="./images\img\Desserts\d5.jpg" alt="">
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
@endsection
</body>
</html>
