@extends('base')

@section('content')
<section>
    <h2>ReservationIndex</h2>
    @foreach ($reservations as $reservation)
    <div>
        <a href="{{ route('main.reservationShow',['id' => $reservation->id]) }}"><h3>{{ $reservation->nom }}</h3></a>
    </div>
    @endforeach
</section>
@endsection