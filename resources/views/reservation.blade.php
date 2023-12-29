@extends('base')

@section('title' , 'reservation')

@section('content')

<body>
<section class="réservation" id="réservation">
        <div class="titre noir">
            <h2 class="titre-text"><span>R</span>eservation</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit Possimus, eum velit.</p>
        </div>
        <div class="contactform">
            <h3>Réservez une table <br> ou <br> passez votre commande</h3>
            <div class="inputboite">
                <input type="date" placeholder="date">
            </div>
            <div class="inputboite">
                <input type="Name" placeholder="votre Nom et Prénom">
            </div>
            <div class="inputboite">
                <input type="number" placeholder="nombre de personnes">
            </div>
            <div class="inputboite">
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
            <div class="inputboite">
                <textarea placeholder="message"></textarea>
            </div>
            <div class="inputboite">
                <input type="submit" value="valider">
            </div>
        </div>
    </section>
@endsection
</body>
</html>