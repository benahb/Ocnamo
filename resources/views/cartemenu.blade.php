@extends('base')

@section('title' , 'cartemenu')

@section('content')
<section class="categorie">
    <h2><span>Carte</span> Menu</h2>
        @foreach ($categories as $categorie)
    <div>
      <h3>{{ $categorie->nom }}</h3>
      {{-- <h3>Petit déjeuner</h3> --}}
      <ul class="plats">
        @foreach ($categorie->plats() as $plat)
        <li>
          <a href="{{ route('main.plat', ['id'=> $plat->id]) }}"><img src="{{ asset('images/'.$plat->fichier) }}" alt="{{ $plat->nom}}"/></a>
          <a href="{{ route('main.plat', ['id'=> $plat->id]) }}">
          <h4>{{$plat->nom}}</h4></a>
          <span class="prix">{{ $plat->prix }}.00 eur</span>
          <button class="buttoncontent" type="submit" ><a href="{{ route('main.plat', ['id'=> $plat->id]) }}">voir plus</button></a>
        <ul>
          @foreach ( $plat->etiquettes() as $etiquette )
          <li>{{$etiquette->nom}}</li>
          @endforeach
        </ul>
        </li>
        @endforeach
        </ul>
      </div>
      @endforeach
    </section>
    @endsection
          






