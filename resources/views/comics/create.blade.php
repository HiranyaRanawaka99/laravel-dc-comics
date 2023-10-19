@extends('layouts.app')

@section('main-content')

<div class="container">
    <button class="btn btn-success"> 
        <a href=" {{ route ('comic.index') }}"> Torna al database </a>
     </button>

    <h1> Crea il tuo fumentto </h1>

    <form action=" {{ route ('comic.store')}}" method="POST"> 
        @csrf
    <div class="row">
        <div class="col col-4">
            <label class="form-label" for="title" ciao > Titolo </label>
            <input type="text" id="title" name="title">
        </div>
        <div class="col col-4">
            <label  class="form-label" for="price"> Prezzo </label>
            <input type="text" id="price" name="price">
        </div>
        <div class="col col-4">
            <label  class="form-label" for="type"> Tipo </label>
            <select id="type" name="type" class="form-select">
                <option value="comic book"> comic book </option>
                <option value="graphic novel"> graphic novel </option>
            </select>
        </div>
        <div class="col col-12">
            <label  class="form-label" for="description"> Descrizione </label>
            <textarea type="text" id="description" name="description"></textarea>
        </div>
    </div>
    <button class="btn btn-primary">Salva</button>
    </form>
</div>


@endsection