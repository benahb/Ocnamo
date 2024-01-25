@extends('base')

@section('title' , 'apropos')

@section('content')

<section class="apropos" id="apropos">
    <div class="logoimg">
        <img id="logo" src="{{asset('logo/img10.png')}}" alt="">
        
    </div>
    <div class="row">
        <div class="col50">
            <h2 class="titre-text"><span>A</span> Propos De Nous</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae dignissimos nulla ipsam
                pariatur autem quisquam doloremque odio dolor in, reiciendis voluptate similique odit saepe officia
                labore nostrum. Accusantium, nobis aliquid?. Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Rerum laudantium et sequi, laborum, corporis beatae deserunt aperiam, in distinctio alias
                accusamus consequatur corrupti. Voluptatibus pariatur magni eligendi possimus perferendis mollitia!.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea vel voluptatibus delectus, cum quod non
                ab iste quos error consequuntur reiciendis nesciunt soluta saepe quae, nisi aut sed placeat. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus corporis perferendis est voluptatibus culpa aliquid iure doloribus sit. Voluptatibus voluptates soluta animi laudantium praesentium explicabo nobis earum perspiciatis eaque corrupti! Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum culpa voluptates a laudantium porro corporis consequatur. At similique, debitis, nesciunt quod fuga cupiditate error ipsum, id deleniti commodi sunt temporibus! </p>
            </div>
        <div class="col50">
            <div class="img">
                <img src="{{ asset('/images/p17.jpg') }}" alt="image">
            </div>
            <div class="secondimg">
                <div class="col50img1">
                    <img src="{{asset('images/img/Plats/p13.jpg')}}" alt="">
                    <p>Chaque plat est préparé avec soin, en utilisant des ingrédients frais et authentiques importés directement du Cameroun, afin de vous offrir une expérience gustative inoubliable. Que vous soyez un amateur de viande, un adepte du végétarisme ou un explorateur culinaire, notre menu varié saura satisfaire toutes les papilles.

                        Notre cadre décontracté et convivial est l'endroit idéal pour partager des moments mémorables en famille, entre amis ou pour célébrer des occasions spéciales. Savourez vos plats préférés dans une atmosphère imprégnée de musique camerounaise envoûtante et de décorations qui vous transportent directement dans les rues animées de Douala.
                        
                        Au restaurant O'Cnamo, nous sommes fiers de vous offrir une expérience culinaire qui va au-delà du simple repas. C'est un voyage sensoriel à travers les traditions, les arômes et la générosité du Cameroun. Nous sommes impatients de vous accueillir et de partager avec vous la richesse de notre cuisine.
                        
                        Réservez votre table dès maintenant et laissez-vous emporter par une aventure gastronomique camerounaise exceptionnelle !</p>
                </div>
                <div class="col50img2">
                    <img src="{{asset('images/E7.jpg')}}" alt="">
                    <p>Plongez dans une expérience gastronomique authentique où les saveurs exquises du Cameroun prennent vie. Notre restaurant, imprégné de l'hospitalité chaleureuse et de la richesse culturelle de cette nation africaine, vous transporte dans un monde où la passion de la cuisine se mêle à la convivialité.

                        Dès que vous franchissez nos portes, vous êtes accueilli par l'arôme envoûtant des épices camerounaises qui chatouillent vos sens. Notre équipe dévouée vous guidera à travers un menu diversifié, mettant en valeur des plats traditionnels tels que le poulet DG, le Ndolé, le poisson braisé et bien d'autres délices.</p>
                </div>
            </div>
            {{-- <div class="slogan">
                <div>
                    <h3>Saveurs du Cameroun, un festin pour vos sens</h3>
                </div>
               --}}
            </div>

                
        </div>
    </div>
</section>

@endsection
