@extends('base')

@section('content')
<section>
        <h2>nom : {{$reservationShow->nom}}</h2>
        <span>nombre de couverts : {{$reservationShow->couvert}}</span>
        <h2>date : {{$reservationShow->jour}}</h2>
        <h2>telephone : {{$reservationShow->telephone}}</h2>
        <p>commentaire : {{$reservationShow->commentaire}}</p>
</section>
@endsection