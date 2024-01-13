@extends('base')

@section('title' , 'cartemenu')

@section('content')
<section class="categorie">
    <h2><span>Carte</span> Menu</h2></h2>
  @foreach ($categories as $categorie)
    <div>
      <h3>{{ $categorie }}</h3>
      {{-- <h3>Petit déjeuner</h3> --}}
      <ul class="plats">
        @for ($i = 0; $i< 5; $i++)
        <li>
          <img src="{{ asset('/images\img\Plats\imageedit_4_8271986045.jpg') }}" alt="ella esso">
          <h4>Lorem ipsum ipsum .</h4>
          <span class="price">9.99 eur</span>
         <a href="{{ route('main.menu') }}"><button class="buttoncontent" type="submit" >Voir plus</button></a>
        </li>
        @endfor
      </ul>

    </div>
    @endforeach

</section>
@endsection



