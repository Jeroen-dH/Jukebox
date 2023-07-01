@extends('main')

@section('content')
    
    <h1>Dit is het totaaloverzicht van alle playlist's</h1>
    <ul>
    @foreach($playlists as $playlist)
        @if ($user->id == $playlist->user_id)
            <li>{{$playlist->name}} <a href="{{route('playlist.destroy' , ['playlist' => $playlist->id])}}" style="color:black;">X</a></li>
            <ul id="songs" class="songitems">
                @foreach($playlist->songs as $song)
                <li ><i class="bi bi-music-note"></i>-  {{$song->name}}</li>
                @endforeach
            </ul>
        @endif
    @endforeach()
    </ul>
    <a href="{{route('playlist.create')}}" style="color: black">create playlist</a>
@endsection