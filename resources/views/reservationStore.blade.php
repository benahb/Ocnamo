@extends('base')

@section('title', 'confirmation')

@section('content')
<h2>confirmation</h2>
<style>
*{list-style: none;}
h2{color:rgb(22, 152, 212); padding-top: 120px; text-align: center;}
p{color: white;padding-top: 20px;text-align: center;}
li{color: white;padding-top: 20px;text-align: center;}
</style>

<p>votre reservation a bien été prise en compte</p>

<ul>
        <li>{{ $reservation->nom }}</li>
        <li>{{ $reservation->couvert }}</li>
        {{-- convertit une date au format Y-m-d en date au format d/M/Y --}}
        <li>{{ date('d/m/Y', strtotime($reservation->jour)) }}</li>
        <li>{{ $reservation->heure }}</li>
        <li>{{ $reservation->telephone }}</li>
        @if ($reservation->commentaire)
        <li>{{ $reservation->commentaire }}</li>
        @endif
                

</ul>
@endsection