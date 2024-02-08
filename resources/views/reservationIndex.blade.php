@extends('base')

@section('content')
<section>
    <h2 style="color: wheat; text-align:center">ReservationIndex</h2>
    @foreach ($reservations as $reservation)
    <div>
        <a href="{{ route('main.reservationShow',['id' => $reservation->id]) }}"><h3 style="color: rgb(236, 213, 6); text-align:center">{{ $reservation->nom }}</h3></a>
    </div>
    @endforeach
</section>
@endsection