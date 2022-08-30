@extends('layout.app')
@section('main_content')
    <h1>Aggiungi il tuo Comic</h1>

    <form action="{{ route('comics.store') }}" method="post">
        @csrf
        <div>
            <label for="title">Titolo Prodotto:</label>
            <input type="text" id='title' name="title">
        </div>

        <div>
            <label for="thumb">Url Immagine Prodotto:</label>
            <input type="text" id='thumb' name="thumb">
        </div>

        <div>
            <label for="series">Serie Prodotto:</label>
            <input type="text" id='series' name="series">
        </div>

        <div>
            <label for="type">Tipo: (es. comic book or graphic novel)</label>
            <input type="text" id='type' name="type">
        </div>

        <div>
            <label for="sale_date">Data Rilascio: (formato esempio: 2018-10-02)</label>
            <input type="text" id='sale_date' name="sale_date">
        </div>

        <div>
            <label for="price">Prezzo:</label>
            <input type="text" id='price' name="price">
        </div>

        <div>
            <label for="description">Descrizione:</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>

        <button>Save</button>
    </form>
@endsection