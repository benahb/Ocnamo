@extends('base')

@section('title', 'apropos')

@section('content')

    <section class="apropos" id="apropos">
        <div class="row d-sm-flex flex-xl-wrap">
            <div class="col50">
                <div class="logoimg">
                    <img id="logo" src="{{ asset('img/bg-hero.jpg') }}" alt="logo">
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
                        braisé et bien d'autres délices. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas
                        laborum veniam facilis fuga, nam at, ipsum dolorum ipsa, cumque corporis aspernatur illo dolorem?
                        Modi architecto eos necessitatibus reiciendis dolorem magni.
                        Temporibus rem nam explicabo eveniet qui aperiam error, delectus iste assumenda dolor vero nesciunt
                        facilis earum molestiae quis cumque velit sit commodi mollitia. Provident dolore minima tempore
                        illum, modi laboriosam.</p>

                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    <section id="about">
        <div class="container d-sm-flex flex-xl-wrap" >
            <div class="row">
                <div class="col-lg-5">
                    <div class="about-col-left">
                        <img class="img-fluid" src="img/about-us.jpg" />
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="about-col-right">
                        <div class="row">
                            <div class="col-md-12">
                                <header class="section-header">
                                    <h3>Qui Nous Somme</h3>
                                </header>
                                <ul class="icon">
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-pinterest"></a></li>
                                    <li><a href="#" class="fa fa-google-plus"></a></li>
                                </ul>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam convallis quam sed tincidunt accumsan. Aliquam at tincidunt tortor, ac porta turpis. Curabitur lacinia venenatis semper.
                                </p>
                                <p>
                                    Aliquam ut nibh ut lacus posuere facilisis. Vestibulum ullamcorper arcu et bibendum ultrices. Suspendisse rutrum turpis vitae.
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="about-col">
                                    <h4>Nos Qualités</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dignissim mi arcu, ut tristique dui eleifend a. Vivamus ac nulla metus. Vestibulum sit amet quam tincidunt.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="about-col">
                                    <h4>Nos Facilités</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dignissim mi arcu, ut tristique dui eleifend a. Vivamus ac nulla metus. Vestibulum sit amet quam tincidunt.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
