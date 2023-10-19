@extends('layouts.app')

@section('main-content')

<div class="container">

    <h1> Crea il tuo fumetto </h1>
    
    <a href=" {{ route ('comic.index') }}" class="btn btn-success my-3"> Torna al database</a>


    <form action="{{ route ('comic.store')}}" method="POST"> 
        @csrf

    <div class="col col-7">
        <img id="preview-image" class="image-fluid">
    </div>
        
    <div class="row">
        <div class="col col-6 mt-3">
            <label class="form-label" for="title" > Titolo </label>
            <input class="w-50" type="text" id="title" name="title">
        </div>

        <div class="col col-6 mt-3">
            <label  class="form-label" for="price"> Prezzo </label>
            <input class="w-50" type="text" id="price" name="price">
        </div>

        <div class="col col-6 mt-3">
            <label  class="form-label" for="series"> Serie </label>
            <input  class="w-50" type="url" id="series" name="series">
        </div>

        <div class="col col-6 mt-3">
            <label  class="form-label" for="thumb"> Url immagine </label>
            <input  class="w-50" type="text" id="thumb" name="thumb">
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