@extends('guest.layouts.master')

@section('tab')
    {{$comic->title}}
@endsection

@section('crudFunction')
    <h1>{{$comic->title}}</h1>
    <img src="{{$comic->thumb}}" alt="">
    <p>{{$comic->description}}</p>
    <p> ${{$comic->price}}</p>

    <button onclick="window.location.href='{{ route('comics.edit', $comic->id)}}';">EDIT</button>
    <input type="button" id="deleteButton" value="DELETE">

    <form action="{{route('comics.destroy', ['comic'=> $comic->id])}}" method="POST" id="deleteForm">
        @csrf
        @method('DELETE')
    </form>
@endsection
