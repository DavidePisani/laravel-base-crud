@extends('layout.app')
@section('main_content')
    <h1>{{$comics->title}}</h1>
    <img src="{{$comics->thumb}}" alt="">
    <div>Serie: {{$comics->series}}</div>
    <p>{{$comics->description}}</p>
    <div>Tipo: {{$comics->type}}</div>
    <div>Prezzo: {{$comics->price}}</div>
    <div>Data uscita: {{$comics->sale_date}}</div>
@endsection