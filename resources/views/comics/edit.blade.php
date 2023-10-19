@extends('layouts.app')

@section('main-content')

<div class="container">

    <h1> Modifica il tuo fumetto </h1>

    <a  class="btn btn-success" href=" {{ route ('comic.index') }}"> Torna al database </a>
    <a  class="btn btn-warning" href=" {{ route ('comic.show', $comic) }}"> Mostra dettagli  </a>

    <form action="{{ route ('comic.update', $comic) }}" method="POST"> 
        @csrf
        @method('PUT')
    
        <div class="row mt-5">

        <div class="col col-7">
            <img src="{{ $comic->thumb }}" id="preview-image" class="image-fluid">
        </div>

        <div class="col col-4">

            <div class="mt-4">
                <label class="form-label" for="title" > Titolo </label>
                <input type="text" id="title" name="title" value="{{ $comic->title}}">
            </div>

            <div class="mt-3">
                <label  class="form-label" for="price"> Prezzo </label>
                <input type="text" id="price" name="price" value="{{ $comic->price}}">
            </div>

            <div class="mt-3">
                <label  class="form-label" for="series"> Serie </label>
                <input type="text" id="series" name="series" value="{{ $comic->series}}">
            </div>

            <div class="mt-3">
                <label  class="form-label" for="thumb"> Url immagine </label>
                <input  class="w-50" type="url" id="thumb" name="thumb"  >
            </div>

            <div class="mt-3">
                <label  class="form-label" for="type"> Tipo </label>
                <select id="type" name="type" class="form-select">
                    <option value="comic book" @if($comic->type == 'comic book') selected @endif> comic book </option>
                    <option value="graphic novel" @if($comic->type == 'graphic novel') selected @endif> graphic novel </option>
                </select>
            </div>

            <div class="mt-3">
                <label  class="form-label" for="description"> Descrizione </label>
                <input class= "w-100 mt-3" type="text" id="description" name="description" value="{{ $comic->description}}">
            </div>
            <button class="btn btn-primary mt-3">Salva</button>
        </div>
        </div>
    </form>
</div>


@section('scripts')
<script>
    const previewImageEl = document.getElementById('preview-image');
    const thumbInput = document.getElementById('thumb');

    thumbInput.addEventListner('change', fucntion() {
        previewImageEl.src = this.value;
    })

</script>
@endsection


@endsection