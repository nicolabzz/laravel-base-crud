@extends('guest.layouts.master')

@section('tab')
    Create new comic
@endsection

@section('crudFunction')
    <h2>"CREATE" comic</h2>
    <form action="{{route('comics.store')}}" method="POST">
    @csrf
    @method('POST')
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="thumb">Thumb</label>
            <input type="text" name="thumb" id="thumb">
        </div>
        <div>
            <label for="price">Price</label>
            <input type="text" name="price" id="price">
        </div>
        <div>
            <label for="series">Series</label>
            <input type="text" name="series" id="series">
        </div>
        <div>
            <label for="sale_date">Sale date</label>
            <input type="date" name="sale_date" id="sale_date">
        </div>
        <div>
            <label for="type">Type</label>
            <input type="text" name="type" id="type">
        </div>
        <div>
            <input type="submit" value="Create">
        </div>
    </form>
@endsection
