@extends('layout.app')
@section('main_content')
    <h1>Aggiungi il tuo Comic</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('comics.store') }}" method="post">
        @csrf
        <div>
            <label for="title">Titolo Prodotto:</label>
            <input type="text" id='title' name="title" value="{{ old('title') }}">
        </div>

        <div>
            <label for="thumb">Url Immagine Prodotto:</label>
            <input type="text" id='thumb' name="thumb" value="{{ old('thumb') }}">
        </div>

        <div>
            <label for="series">Serie Prodotto:</label>
            <input type="text" id='series' name="series" value="{{ old('series') }}">
        </div>

        <div>
            <label for="type">Tipo: (es. comic book or graphic novel)</label>
            <input type="text" id='type' name="type" value="{{ old('type') }}">
        </div>

        <div>
            <label for="sale_date">Data Rilascio: (formato esempio: 2018-10-02)</label>
            <input type="date" id='sale_date' name="sale_date" value="{{ old('sale_date') }}">
        </div>

        <div>
            <label for="price">Prezzo:</label>
            <input type="text" id='price' name="price" value="{{ old('price') }}">
        </div>

        <div>
            <label for="description">Descrizione:</label>
            <textarea name="description" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
        </div>

        <button>Save</button>
    </form>
@endsection