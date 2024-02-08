@extends('base')

@section('title', 'etiquette')

@section('content')
    <section>
        <style>
            *{list-style: none;}
            h3{color:chartreuse;text-align: center;}
            li{color:deepskyblue;text-align: center;}
        </style>
        <h3>Etiquettes des plats</h3>
        <ul>   
            <li>{{$etiquette->nom }}</a></li>
        </ul>
    </section>
@endsection
