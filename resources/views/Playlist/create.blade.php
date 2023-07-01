@extends('main')

@section('content')
    <form action="{{route('playlist.store')}}" method="POST">
        @csrf
        <label for="">Vul een naam van jou playlist in</label>
        <input name="PlaylistName" type="text">
        <input type="submit" value="send me">
        <input type="text" value="{{Auth::user()->id}}" style="display:none" name="user_id">
    </form>
@endsection