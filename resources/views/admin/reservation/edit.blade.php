@extends('../../base')

@section('title', 'Admin-Reservation_Edit')

@section('content')





    <section class="reservation" id="reservation">
        <div class="titre-noire">
            <h2 class="titre-text1"><span>R</span>éservation</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit Possimus, eum velit. Lorem ipsum, dolor sit amet
                consectetur adipisicing elit. Corporis ipsum magnam quisquam, reprehenderit ut distinctio architecto sequi
                rerum, dolorum error asperiores.</p>
            <img src="{{ asset('/images\bg-img\pexels-terje-sollie-313700.jpg') }}" alt="">
        </div>
        <div class="contactforme">

            <form id="reservation" action="{{ route('admin.reservation.update', ['id' => $reservation->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <di class="inputboites">
                    <label for="jour" class="control-label">Date</label>
                    <input type="date" placeholder="date" name="jour" id="jour" min="{{ date('Y-m-d') }}"
                        value="{{ old('jour', $reservation->jour) }}" required>
                    @error('jour')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </di <div class="inputboites">
                <label for="name" class="control-label">Nom et prénom </label>
                <input type="name" placeholder="votre nom et prénom" name="nom" id="nom" min="3"
                    max="50" value="{{ old('nom', $reservation->nom) }}"required>
                @error('nom')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
        </div>

        <div class="inputboites">
            <label for="couvert" class="control-label">Nombre de couvert</label>
            <input type="number" placeholder="Nombre de personnes" name="couvert" id="couvert" min="1"
                max="16" value="{{ old('couvert', $reservation->couvert) }}" required>
            @error('couvert')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="inputboites">
            <label for="heure" class="control-label">Séléctionez l'heure</label>
            <select name="heure" id="heure" required>
                <option value=""></option>
                @foreach ($heures as $heure)
                    <option value="{{ $heure }}"
                        {{ old('heure', $reservation->heure) == $heure . ':00' ? 'selected' : '' }}>{{ $heure }}
                    </option>
                @endforeach
            </select>
            @error('heure')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="inputboites">
            <label for="telephone" class="control-label">Numéro téléphone</label>
            <input type="phone" placeholder="N° de télépohne" name="telephone" id="telephone"
                value="{{ old('telephone', $reservation->telephone) }}" required>
            @error('telephone')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="inputboites">
            <label for="commentaire" class="control-label">Message</label>
            <textarea placeholder="message" name="commentaire" id="commentaire" cols="30" rows="10">{{ old('commentaire', $reservation->commentaire) }}</textarea>
            @error('commentaire')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="inputboites">
            <input type="submit" value="Modifiez">
        </div>
        </form>
        </div>
    </section>

@endsection
