@extends('main')

@section('content')
    <h1>Dit is het totaaloverzicht van alle genres</h1>
    @foreach($genres as $genre)
    <div class='genreitem'>
        <div>
            {{-- <button class="btn btn-warning" onclick="change(this)">change</button> --}}
            {{$genre->name}} 
            <a href="{{route('genre.destroy' , ['genre' => $genre->id])}}" style="color:black;">X</a></li>
        </div>
        <ul id="songs" class="songitems">
            @foreach($genre->songs as $song)
            <li ><i class="bi bi-music-note"></i>-  {{$song->name}}</li>
            @endforeach
        </ul>
    </div>
@endforeach()
    <a href="{{route('genre.create')}}" style="color: black">create genre</a>

    <style>
        .songitems{
            /* display: none; */
            list-style: none;
            margin-left: -22px;
        }
        .genreitem{
            background-color: goldenrod;
            margin: 5px;
            border: solid black 1px;
            list-style: none;
            /* height: 56px; */
            width: 100%
        }
        .genreitem div {
            position: relative;
            line-height: 45px;
            list-style: none
        }
        .genreitem div a{
            position: absolute;
            right: 30px;
        }
        .songitems:hover{
            display: block;
        }
        .genreitem : + .songitems{
            display: block;
            height: fit-content;
        }
    </style>
    <script>
        // function change(x){
        //     var song = document.getElementById('songs');
        //     if(song.style.display == "none"){
        //         // console.log(song);
        //         song.style.height = 'fit-content';
        //         song.style.display = "block";
        //     }else{
        //         // song.style.height = 'fit-content';
        //         song.style.display = "none";
        //     }
            
        // }
    </script>
@endsection