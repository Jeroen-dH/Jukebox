<?php

namespace Database\Seeders;
use App\Models\Song;
use App\Models\Playlist;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PlaylistSeeder::class,
            GenreSeeder::class,
            songSeeder::class,
        ]);
        Playlist::all()->each(function($playlist){
            $songs = Song::inRandomOrder()->limit(10)->get();
            $playlist->songs()->attach($songs->pluck('id'));
        });
    }
}
