@extends('layout.app')
@section('main_content')


<h1>Lista fumetti</h1>

@foreach ($comics_collection as $comic)
    <div class="card">
        <h3>{{$comic->title}}</h3>
        <div>Serie: {{$comic->series}}</div>
        <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">Guarda questo articolo</a>
    </div>
    <br>
    
@endforeach
    
@endsection