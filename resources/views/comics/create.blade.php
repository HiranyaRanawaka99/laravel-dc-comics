@extends('layouts.app')

@section('main-content')

<div class="container">

    <h1> Crea il tuo fumetto </h1>
    
    <a href=" {{ route ('comic.index') }}" class="btn btn-success my-3"> Torna al database</a>


    <form action=" {{ route ('comic.store')}}" method="POST"> 
        @csrf
        
    <div class="row">
        <div class="col col-4 mt-3">
            <label class="form-label" for="title" > Titolo </label>
            <input type="text" id="title" name="title">
        </div>

        <div class="col col-4 mt-4">
            <label  class="form-label" for="price"> Prezzo </label>
            <input type="text" id="price" name="price">
        </div>

        <div class="col col-4 mt-3">
            <label  class="form-label" for="series"> Serie </label>
            <input type="text" id="series" name="series">
        </div>

    
        <div class="col col-6 mt-3">
            <label  class="form-label" for="type"> Tipo </label>
            <select id="type" name="type" class="form-select">
                <option value="comic book"> comic book </option>
                <option value="graphic novel"> graphic novel </option>
            </select>
        </div>
        <div class="col col-12 mt-3">
            <label  class="form-label" for="description"> Descrizione </label>
            <input class="w-100" type="text" id="description" name="description">
        </div>
    </div>
    <button class="btn btn-primary mt-3">Salva</button>
    </form>
</div>








@endsection