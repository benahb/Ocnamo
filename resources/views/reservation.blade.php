@extends('base')

@section('title' , 'reservation')

@section('content')

<body>
<section class="reservation" id="reservation">
        <div class="titre-noire">
            <h2 class="titre-text1"><span>R</span>éservation</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit Possimus, eum velit. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis ipsum magnam quisquam, reprehenderit ut distinctio architecto sequi rerum, dolorum error asperiores.</p>
            <img src="{{ asset('/images\bg-img\pexels-terje-sollie-313700.jpg') }}" alt="">
        </div>
        <div class="contactforme">
            <h3>Réservez une table <br> ou <br> Passez votre commande</h3>
            <div>
                @foreach ($errors->all() as $error)
                        {{ $error }}
                @endforeach
            </div>
            <form id="reservation" action="{{route('reservation.store')}}" method="POST">
                @csrf
                <div class="inputboites">
                    <label for="jour" class="control-label">Date</label>
                    <input type="date" placeholder="date" name="jour" id="jour"  min="{{ date('Y-m-d') }}" value="{{ old('jour') }}" required>
                    @error('jour')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="inputboites">
                    <label for="name" class="control-label">Nom et prénom </label>
                    <input type="name" placeholder="votre nom et prénom" name="nom" id="nom" min="3" max="50" value="{{ old('nom') }}"required>
                    @error('nom')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="inputboites">
                    <label for="couvert" class="control-label">Nombre de couvert</label>
                    <input type="number" placeholder="Nombre de personnes" name="couvert" id="couvert" min="1" max="16" value="{{ old('couvert') }}" required>
                    @error('couvert')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="inputboites">
                    <label for="heure" class="control-label">Séléctionez l'heure</label>
                        <select name="heure" id="heure" required>
                            <option value=""></option>
                            @foreach ($heures as $heure)
                            <option  value="{{ $heure }}" {{ old('heure') == $heure ? 'selected' : '' }}>{{ $heure }}</option>
                            @endforeach
                        </select>
                    @error('heure')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror    
                </div>
                <div class="inputboites">
                    <label for="telephone" class="control-label">Numéro téléphone</label>
                    <input type="phone" placeholder="N° de télépohne" name="telephone" id="telephone" value="{{ old('telephone')}}" required>
                    @error('telephone')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>   
                <div class="inputboites">
                    <label for="commentaire" class="control-label">Message</label>
                    <textarea placeholder="message" name="commentaire" id="commentaire" cols="30" rows="10">{{ old('commentaire') }}</textarea>
                    @error('commentaire')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="inputboites">
                    <input type="submit" value="Réservez">
                </div>
            </form>
        </div>
    </section>
    <section class="temoignage" id="temoingnage">
        <div class="titre blanc">
            <h2 class="titre-text">Que Disent Nos<span> C</span>lients</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae. </p>
        </div>
        <div class="contenu">
            <div class="box">
                <div class="imbox">
                    <img src="{{ asset('/images/img/profile/austin-distel-7uoMmzPd2JA-unsplash.jpg') }}" alt="">
                </DIV>
                <div class="text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, eum velit, labore quibusdam
                        molestiae facere rem quaerat veniam minima adipisci beatae unde .</p>
                    <h3>David Poulet </h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="{{ asset('/images/img/profile/michael-dam-mEZ3PoFGs_k-unsplash.jpg') }}" alt="">
                </DIV>
                <div class="text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, eum velit, labore quibusdam
                        molestiae facere rem quaerat veniam minima adipisci beatae unde .</p>
                    <h3>Sara Poule</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="{{ asset('/images/img/profile/midas-hofstra-a6PMA5JEmWE-unsplash.jpg') }}" alt="">
                </DIV>
                <div class="text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, eum velit, labore quibusdam
                        molestiae facere rem quaerat veniam minima adipisci beatae unde .</p>
                    <h3>Matis Poussin</h3>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
@endsection

