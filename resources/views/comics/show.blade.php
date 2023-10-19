@extends('layouts.app')

@section('main-content')

<div class="container my-4">

    <a class="btn btn-success" href=" {{ route ('comic.index') }}"> Torna al db </a> 
    <a class="btn btn-warning" href=" {{ route ('comic.edit', $comic) }}"> Modifica fumetto </a>

    <h2 class=" my-5 text-center"> {{ $comic->title}} </h2>
    <div class="d-flex gap-5">
        <div class="col col-7">
            <img src=" {{ $comic->thumb }}"  alt="...">
        </div>
        <div class="col col-4">
            <p> <b> ID: </b> {{ $comic->id}}</p>
            <p class="c-text"> 
                <b>Trama:</b>{{ $comic->description }} </p>
            <p class="c-text">  
                <b>Serie:</b>
                {{ $comic->series }} </p>
            <p class="c-text">
                <b>Prezzo:</b>${{ $comic->price }} </p>
            <p class="c-text">
                <b>Data di vendita:</b> {{ $comic->sale_date }}
            </p>
        </div>
    </div> 
</div>

@endsection