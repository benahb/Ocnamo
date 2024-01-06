@extends('base')

@section('title' , 'accueil')

@section('content')
</head>
<body>
<section class="banniere" id="banniere">
    <img src="./images\bg-img\2.jpg" alt="">
        <div class="contenu">
            <h2>Decouvrez nos plats authentiques</h2>
            <p>L"Ocnamo vous invite à un savoureux voyage au coeur du Cameroun authentique.
                Goutez les trésors gustatif de la cuisine camerounaise au sein d'une ambiance contemporain Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, repellendus omnis officia quae perspiciatis vitae ullam officiis perferendis sit hic rerum quibusdam maiores neque, aut labore, non quo est debitis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur quasi incidunt vel sapiente magni non doloremque, nostrum officiis voluptatibus sequi, voluptatem expedita amet repudiandae temporibus corporis odit distinctio id inventore. lo...</p>
            <a href="{{ route('main.menu') }}" class="btn1">Notre Menu</a>
            <a href="{{ route('main.reservation') }}" class="btn2">Réservation</a>
        </div>
    </section>

   @endsection

</body>
</html>
