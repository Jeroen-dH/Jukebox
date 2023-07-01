@extends('main')

@section('content')
<div class="page">
    <div>
        Homepage
        {{Auth::user()}}
    </div>
</div>
<style>
    .body{
        background-color: lightgray;
        color: white;
    }

    .container{
        width: fit-content;
        height: fit-content;
        padding: 50px;
        background-color: lightblue;
    }
    .page{
        height: 85vh;
        /* width: 97.5vw; */
        border: solid red 1px;
    }
    </style>
@endsection