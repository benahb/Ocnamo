@extends('base')

@section('content')
<section>
    <h2 style="color: wheat; text-align:center">ReservationIndex</h2>
    
    <div>
        <h2>{{ $reservation->id }}</h2>
                                        <h2>{{ $reservation->nom }}</h2>
                                        <h2>{{ $reservation->couverts }}</h2>
                                        <h2>{{ $reservation->heure }}</h2>
                                        <h2>{{ $reservation->jour }}</h2>
                                        <h2>{{ $reservation->telephone }}</h2>
                                        <h2>{{ $reservation->commentaires }}</h2>
                                        <h2>{{ $reservation->created_at }}</h2>
                                        <h2>{{ $reservation->updated_at }}</h2>
    </div>

</section>
@endsection