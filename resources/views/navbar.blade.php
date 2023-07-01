<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <section class="navbar">
        <div>
            <a id="logo" href="{{route('homepage')}}">Jukebox</a>
        </div>

        <div>
            <a href="{{route('genre.index')}}">genres</a>
        </div>
        <div>
            {{-- @if(Auth::user()?->'name' == 'piet') --}}
            <a href="{{route('song.index')}}">songs</a>
        </div>
        <div>
            <a href="{{route('playlist.index')}}">playlist</a>
        </div>
        <div style="position: absolute;right: 20px;">
            <a href="{{route('login')}}">login</a>
        </div>
    </section>
</body>
<style>
    #logo{
        font-size: 25px;
        margin-right: 25px;
        font-weight: bold;
        font-family: sans-serif;
    }
    .navbar{
        position: relative;
        display: flex;
        padding: 20px;
        background-color: black;
        color: blue; 
        overflow: hidden;
    }
    .navbar div{
        padding: 5px;
        margin-right: 5px; 
        font-size: 25px;
        /* background-image: -webkit-linear-gradient(45deg,#0e4db3, #64c2cd);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent; */
        background-image:linear-gradient(to right, #7559f7, #b205f1 33.33333%, #9693df 66.66666%, #4390ce);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-size: 300% 100%;
        background-position: top left;
        transition:all 0.5s ease-in-out;
    }
    a{  
        display: inline-block;
        color: white;
        text-align: center;
        /* padding: 14px 16px; */
        text-decoration: none;
    }
    .navbar div:hover{
        background-position: top left 100%;
    }
</style>
</html>