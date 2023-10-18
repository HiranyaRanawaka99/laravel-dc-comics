@extends('layouts.app')

@section('main-content')

<div class="container my-4">
        <h2> {{ $comic->title}} </h2>
        <div class="card">
        {{-- <img src="..." class="card-img-top" alt="..."> --}}
        <div class="card-body">
            <p> <b> ID: </b> {{ $comic->id}}</p>
            <p class="card-text"> 
                <b>Trama:</b>{{ $comic->description }} </p>
            <p class="card-text">  
                <b>Serie:</b>
                {{ $comic->series }} </p>
            <p class="card-text">
                <b>Prezzo:</b>${{ $comic->price }} </p>
            <p class="card-text">
                <b>Data di vendita:</b> {{ $comic->sale_date }}</p>
        </div>
    </div>
    
</div>

@endsection