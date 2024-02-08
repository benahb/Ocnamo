@extends('base')

@section('content')
    <section class="plat-container">
        <style>
          * {list-style: none;}
        </style>
        <img src="{{ asset('images/' . $plat->fichier) }}" alt="{{ $plat->nom }}">
        <h2>{{ $plat->nom }}</h2>
        <span class="prix">{{ $plat->prix }}.00 eur</span>
        <ul>
            @foreach ($plat->etiquettes() as $etiquette)
                <li>{{ $etiquette->nom }}</li>
            @endforeach
        </ul>
        <a href="" ><button class="buttoncontent" type="submit">ajoutez a votre panier</button></a>
    </section>
@endsection
