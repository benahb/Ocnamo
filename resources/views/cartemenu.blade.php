@extends('base')

@section('title' , 'cartemenu')

@section('content')
<section class="categorie">
    <h2><span>Carte</span> Menu</h2></h2>
       @foreach ($categories as $categorie)
    <div>
      <h3>{{ $categorie->nom }}</h3>
      {{-- <h3>Petit déjeuner</h3> --}}
      <ul class="plats">
        @foreach ($categorie->plats() as $plat)
        <li>
          <img src="{{ asset('/images/'.$plat->fichier) }}" alt="ella esso">
          <h4>{{$plat->nom}}</h4>
          <span class="prix">{{$plat->prix}}.00 eur</span>
         <a href="{{ route('main.menu') }}"><button class="buttoncontent" type="submit" >voir plus</button></a>
        </li>
        @endforeach
      </ul>

    </div>
    @endforeach

</section>
@endsection



