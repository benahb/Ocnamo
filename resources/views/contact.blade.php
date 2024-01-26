@extends('base')

@section('title' , 'contact')

@section('content')

<body>
<section class="contact" id="contact">
        <div class="titre-noir">
            <h2 class="titre-text"><span>C</span>ontact</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit Possimus, eum velit.</p>
            <img src="{{ asset('/images\bg-img\pexels-quark-studio-3201921.jpg') }}" alt="">
        </div>
        <div class="contactform">
        <form id="contact" action="formcreate" method="POST">
        @csrf
            <h3>Nous contacter</h3>
            <div class="inputboite">
                <input type="text" placeholder="Nom et Prénom" name="nom" required>
            </div>
            <div class="inputboite">
                <input type="text" placeholder="email" name="email" required>
            </div>
            <div class="inputboite">
                <textarea placeholder="message" name="message" required></textarea>
            </div>
            <div class="inputboite">
                <input type="submit" value="envoyer">
            </div>
        </form>
            @if (session('success'))
            <div class="alert-success">
        
                {{ session('success') }}
            </div>
            @endif
            
        </div>
    </section>
    <section id="horaire" class="horaire">
        <div class="texte">
            <h2 class="titre-text"><span>H</span>oraires & <span>  A</span>dresse</h2>
        </div>
        <div class="image">
            <img src="{{ asset('/logo\img10.png') }}" alt="image horaire">
        </div>
        <div class="infohours">
                <h3>Horaires d'ouverture</h3>
                
                <div class="jour">
                    <h4 class="day">Lundi</h4>
                    <p class="hours">Fermé</p>
                </div>
                <div class="jour">
                    <h4 class="day">Mardi</h4>
                    <p class="hours">12h00 - 22h30</p>
                </div>
                <div class="jour">
                    <h4 class="day">Mercredi</h4>
                    <p class="hours">12h00 - 22h30</p>
                </div>
            <div class="jour">
                <h4 class="day"><span>Jeu</span> - <span>Sam</span></h4>
                <p class="hours">
                    <span class="hour">12h00 - 15h30 </span><span class="hours">•</span><span class="hour"> 19h45 -
                        23h30</span>
                </p>
            </div>
            <div class="jour">
                <h4 class="day">Dimanche</h4>
                <p class="hours"> Fermé</p>
            </div>
            <div class="google">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2530.915993809401!2d3.0678050160850168!3d50.62867736061668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d58d87da5f2d%3A0x739db98176c2b59d!2s5%20Bd%20Louis%20XIV%2C%2059800%20Lille!5e0!3m2!1sfr!2sfr!4v1703952206790!5m2!1sfr!2sfr" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        </div>
    </section>
    @endsection

