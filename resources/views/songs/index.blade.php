@extends('main')

@section('content')
    <h1>Dit is het totaaloverzicht van alle songs's</h1>
    <ul>
        {{-- {{$songs}} --}}
    @foreach($songs as $song)
        <li>song name: {{$song->name}} , genre: {{$song->genre}} <a href="{{route('song.destroy' , ['song' => $song->id])}}" style="color:black;">X</a></li>
    @endforeach()
    </ul>
    <a href="{{route('song.create')}}" style="color: black">create song</a>
@endsection