@extends('base')

@section('title' , 'contact')

@section('content')

<body>
<section class="contact" id="contact">
        <div class="titre noir">
            <h2 class="titre-text"><span>C</span>ontact</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit Possimus, eum velit.</p>
        </div>
        <div class="contactform">
            <h3>envoyer un message</h3>
            <div class="inputboite">
                <input type="text" placeholder="Nom">
            </div>
            <div class="inputboite">
                <input type="text" placeholder="email">
            </div>
            <div class="inputboite">
                <textarea placeholder="message"></textarea>
            </div>
            <div class="inputboite">
                <input type="submit" value="envoyer">
            </div>
        </div>
    </section>
    @endsection
</body>
</html>