<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\profileController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\songController;
use App\Http\Controllers\imagesController;
use App\Http\middleware\IsLoggedIn;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/', function () {
    return view('welcome');
})->name('homepage');
Route::get('/home', function () {
    return view('homepage');
})->name('homepage');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//playlist
Route::middleware(IsLoggedIn::class)->group(function(){
    route::get('/playlist/all',[playlistController::class, 'index'])->name('playlist.index');
    route::get('/playlist/create',[playlistController::class, 'create'])->name('playlist.create');
    route::post('/playlist/store',[playlistController::class, 'store'])->name('playlist.store');
    route::get('/playlist/destroy/{playlist}',[playlistController::class, 'destroy'])->name('playlist.destroy');    
});

route::get('/test',[Controller::class, 'HelloWorld']);
// route::get('/test',[Controller::class, 'HelloWorld']);
// route::get('/login2',[LoginController::class, 'index'])->name('login.index');


//genre
route::get('/genre/all',[GenreController::class, 'index'])->name('genre.index');
route::get('/genre/create',[GenreController::class, 'create'])->name('genre.create');
route::post('/genre/store',[GenreController::class, 'store'])->name('genre.store');
route::get('/genre/destroy/{genre}',[GenreController::class, 'destroy'])->name('genre.destroy');

//songs
route::get('/song/all',[songController::class, 'index'])->name('song.index');
route::get('/song/create',[songController::class, 'create'])->name('song.create');
route::post('/song/store',[songController::class, 'store'])->name('song.store');
route::get('/song/destroy/{song}',[songController::class, 'destroy'])->name('song.destroy');

//playlist
// route::get('/playlist/all',[playlistController::class, 'index'])->name('playlist.index');
// route::get('/playlist/create',[playlistController::class, 'create'])->name('playlist.create');
// route::post('/playlist/store',[playlistController::class, 'store'])->name('playlist.store');
// route::get('/playlist/destroy/{playlist}',[playlistController::class, 'destroy'])->name('playlist.destroy');

require __DIR__.'/auth.php';