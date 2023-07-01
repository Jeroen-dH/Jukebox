<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class PlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $playlists = Playlist::all();
        $user = Auth::user();
        return view('playlist.index',['playlists' => $playlists, 'user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('playlist.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        Playlist::create([
            "name"=>$request['PlaylistName'],
            "user_id"=>$request['user_id']
        ]);
        return redirect('playlist/all');
    }

    /**
     * Display the specified resource.
     */
    public function show(Playlist $playlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Playlist $playlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Playlist $playlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Playlist $playlist)
    {
        Playlist::destroy($playlist['id']);
        return redirect('playlist/all');
    }
}
