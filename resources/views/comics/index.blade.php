@extends('layout.app')
@section('main_content')


<h1>Lista fumetti</h1>

@foreach ($comics_collection as $comic)
    <div class="card">
        <h3>{{$comic->title}}</h3>
        <div>Serie: {{$comic->series}}</div>
        <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">Guarda questo articolo</a>
        <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}"> Modifica questo articolo</a>
        <div>
            <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="Elimina" onClick="return confirm('Sei sicuro di voler cancellare questo Comic?');">
            </form>
        </div>
    </div>
    <br>
    
@endforeach
    
@endsection