@extends('base')

@section('title', 'apropos')

@section('content')

    <section class="apropos" id="apropos">
        <div class="row">
            <div class="col50">
                <div class="logoimg">
                    <img id="logo" src="{{ asset('logo/img10.png') }}" alt="logo">
                </div>
                <h2 class="titre-text"><span>A</span> Propos De Nous</h2>

                <p>Rejoignez-nous et laissez-vous emporter dans un tourbillon de goûts, d'arômes et d'émotions. Chez
                    O'Cnamo, chaque repas est une célébration de l'art culinaire camerounais, une expérience que nous sommes
                    fiers de partager avec vous. Bienvenue dans notre monde, bienvenue chez vous.
                    Notre cadre décontracté et convivial est l'endroit idéal pour partager des moments mémorbles en famille,
                    entre amis ou pour célébrer des occasions spéciales. Savourez vos plats préférés dans une atmosphère
                    imprégnée de musique camerounaise envoûtante et de décorations qui vous transportent directement dans
                    les rues animées de Douala.
                    Au restaurant O'Cnamo, nous sommes fiers de vous offrir une expérience culinaire qui va au-delà du
                    simple repas. C'est un voyage sensoriel à travers les traditions, les arômes et la générosité du
                    Cameroun. Nous sommes impatients de vous accueillir et de partager avec vous la richesse de notre
                    cuisine.

                    Réservez votre table dès maintenant et laissez-vous emporter par une aventure gastronomique camerounaise
                    exceptionnelle ! Notre équipe dédiée met tout en œuvre pour vous offrir bien plus qu'un simple repas :
                    c'est une immersion totale dans la culture culinaire camerounaise. Chaque plat est une déclaration
                    d'amour à la diversité et à la richesse des saveurs de cette nation africaine.
                    Que vous soyez amateur de découvertes culinaires, nostalgique des saveurs de chez vous, ou simplement en
                    quête d'une expérience gastronomique mémorable, O'Cnamo est l'endroit où vos désirs culinaires prennent
                    vie.</p>
            </div>
            <div class="col50">
                <div class="img">
                    <img src="{{ asset('/images/p17.jpg') }}" alt="image">
                </div>

                <div class="col50img2">
                    <img src="{{ asset('images/E8.jpg') }}" alt="">
                    <p>Plongez dans une expérience gastronomique authentique où les saveurs exquises du Cameroun prennent
                        vie. Notre restaurant, imprégné de l'hospitalité chaleureuse et de la richesse culturelle de cette
                        nation africaine, vous transporte dans un monde où la passion de la cuisine se mêle à la
                        convivialité.
                        Dès que vous franchissez nos portes, vous êtes accueilli par l'arôme envoûtant des épices
                        camerounaises qui chatouillent vos sens. Notre équipe dévouée vous guidera à travers un menu
                        diversifié, mettant en valeur des plats traditionnels tels que le poulet DG, le Ndolé, le poisson
                        braisé et bien d'autres délices.</p>
                </div>
            </div>
        </div>


        </div>
        </div>
    </section>

@endsection
