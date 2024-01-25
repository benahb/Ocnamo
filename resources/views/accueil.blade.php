@extends('base')

@section('title' , 'accueil')

@section('content')
</head>
<body>
   
   
   
    <section class="banniere" id="banniere">
        
        <img src="{{ asset('/images\bg-img\2.jpg') }}" alt="image bg">
        <div class="contenu">
            <h2>Decouvrez nos plats authentiques</h2>
            <p>L"Ocnamo vous invite à un savoureux voyage au coeur du Cameroun authentique.
                Goutez les trésors gustatif de la cuisine camerounaise au sein d'une ambiance contemporain </p>
                <ul>
                    @foreach ($actus as $actu)
                    <li>{{ $actus->contenu }} ({{ $actus->date_publication }})</li>
                    @endforeach
                </ul>
                <a href="{{ route('main.menu') }}" class="btn1">Notre Menu</a>
            <a href="{{ route('reservation') }}" class="btn2">Réservation</a>
        </div>
    </section>

   @endsection


