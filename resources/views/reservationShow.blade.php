@extends('base')

@section('content')
<section>
        <h2 style="color: rgb(116, 153, 149);text-align:center">nom : {{$reservationShow->nom}}</h2>
        <h2 style="color: rgb(203, 212, 212);text-align:center">nombre de couverts : {{$reservationShow->couvert}}</h2>
        <h2 style="color: rgb(204, 219, 218);text-align:center">date : {{$reservationShow->jour}}</h2>
        <h2 style="color: rgb(205, 211, 210);text-align:center">telephone : {{$reservationShow->telephone}}</h2>
        <h2 style="color: rgb(194, 204, 203);text-align:center">commentaire : {{$reservationShow->commentaire}}</h2>
</section>
@endsection