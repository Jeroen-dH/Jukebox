@extends('main')

@section('content')
    <form action="{{route('genre.store')}}" method="POST">
        @csrf
        <label for="">Vul een naam van jou genre in</label>
        <input name="genreName" type="text">
        <input type="submit" value="send me">
    </form>
@endsection