<!DOCTYPE html>
@extends('main')

@section('content')
    <form action="{{route('song.store')}}" method="POST">
        @csrf
        <div>
            <label for="">Vul een naam van jou song in</label>
            <input name="songName" type="text" value="{{old('songName')}}">
            <span style="color:red; font-weight:bold"> @error('songName') {{$message}}@enderror</span>
        </div>
        <div>
            <label for="">Vul een artiest van jou song in</label>
            <input name="author" type="text">
            <span style="color:red; font-weight:bold"> @error('author') {{$message}}@enderror</span>
        </div>
        <div>
            <label for="">Vul de release datum van jou song in</label>
            <input name="datum" type="date">
            <span style="color:red; font-weight:bold"> @error('datum') {{$message}}@enderror</span>
        </div>
        <div>
            <label for="">Vul een genre van jou song in</label>
            <select name="GenreID">
                @foreach($genres as $genre)
                    <option name="genreID" value="{{$genre->id}}">{{$genre->name}}</option>
                @endforeach
            </select>
            <span style="color:red; font-weight:bold"> @error('genreID') {{$message}}@enderror</span>
        </div>
        <input type="submit" value="send me">
    </form>
@endsection