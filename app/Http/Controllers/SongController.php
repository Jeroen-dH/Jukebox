<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\Genre;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testsong = Song::find(1);
        $songs = Song::all();
        return view('songs.index', ['songs' => $songs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres = Genre::all();
        return view('songs.create' , ['genres' => $genres]);
        
    }
 
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        // $request->validate([
        //     'songName' => ['required'],
        //     'author' => ['required'],
        //     'date' => ['date', 'required'],
        //     'duration' => ['required', 'integer'],
        //     'genre_id' => ['required'],

        // ]);
        Song::create([
            "name"=>$request['songName'],
            "author"=>$request['author'],
            "date"=>$request['datum'],
            "duration"=>$request['author'],
            "genre_id"=>$request['GenreID']
        ]);
        return redirect('song/all');
    }

    /**
     * Display the specified resource.
     */
    public function show(Song $song)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Song $song)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Song $song)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Song $song)
    {
        Song::destroy($song->id);
        return redirect("song/all");
    }
}
