@extends('base')

@section('title' , 'reservation')

@section('content')

<body>
<section class="reservation" id="reservation">
        <div class="titre-noire">
            <h2 class="titre-text1"><span>R</span>éservation</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit Possimus, eum velit. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis ipsum magnam quisquam, reprehenderit ut distinctio architecto sequi rerum, dolorum error asperiores.</p>
            <img src="./images\bg-img\pexels-terje-sollie-313700.jpg" alt="">
        </div>
        <div class="contactforme">
            <h3>Réservez une table <br> ou <br> Passez votre commande</h3>
            <div class="inputboites">
                <input type="date" placeholder="date">

            </div>
            <div class="inputboites">
                <input type="Name" placeholder="votre Nom et Prénom">
            </div>
            <div class="inputboites">
                <input type="number" placeholder="nombre de personnes">
            </div>
            <div class="inputboites">
                <input type="telephone" placeholder="N° de télépohne">
                <select name="Hour">
                    <option value="Hour-select">séléctionez l'heure</option>
                    <option value="10">10:00</option>
                    <option value="12">11:00</option>
                    <option value="14">12:00</option>
                    <option value="16">13:00</option>
                    <option value="18">14:00</option>
                    <option value="20">15:00</option>
                    <option value="22">16:00</option>
                    <option value="10">17:00</option>
                    <option value="12">18:00</option>
                    <option value="14">19:00</option>
                    <option value="16">20:00</option>
                    <option value="18">21:00</option>
                    <option value="20">22:00</option>
                    <option value="22">23:00</option>
                </select>
            </div>
            <div class="inputboites">
                <textarea placeholder="message"></textarea>
            </div>
            <div class="inputboites">
                <input type="submit" value="valider">
            </div>
        </div>
    </section>
    <section class="temoignage" id="temoingnage">
        <div class="titre blanc">
            <h2 class="titre-text">Que Disent Nos<span> C</span>lients</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae. </p>
        </div>
        <div class="contenu">
            <div class="box">
                <div class="imbox">
                    <img src="./images/img/profile/austin-distel-7uoMmzPd2JA-unsplash.jpg" alt="">
                </DIV>
                <div class="text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, eum velit, labore quibusdam
                        molestiae facere rem quaerat veniam minima adipisci beatae unde .</p>
                    <h3>David Poulet </h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="./images/img/profile/michael-dam-mEZ3PoFGs_k-unsplash.jpg" alt="">
                </DIV>
                <div class="text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, eum velit, labore quibusdam
                        molestiae facere rem quaerat veniam minima adipisci beatae unde .</p>
                    <h3>Sara Poule</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="./images/img/profile/midas-hofstra-a6PMA5JEmWE-unsplash.jpg" alt="">
                </DIV>
                <div class="text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, eum velit, labore quibusdam
                        molestiae facere rem quaerat veniam minima adipisci beatae unde .</p>
                    <h3>Matis Poussin</h3>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
@endsection
</body>
</html>
