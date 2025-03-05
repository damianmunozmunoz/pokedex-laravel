<?php

use App\Http\Controllers\PokemonsController;
use App\Http\Controllers\ObjetosController;
use App\Http\Controllers\TiposController;
use App\Http\Controllers\HabilidadesController;
use App\Http\Controllers\GeneracionesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
})->name('main');

/*Route::get('/main', function () {
    return view('main');
})->name('main');*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('pokemons', 'PokemonsController')->middleware('auth');
Route::get('/buscarPokemons', [PokemonsController::class , 'buscar'])->name('pokemons.buscar');
Route::resource('objetos', 'ObjetosController');
Route::get('/buscarObjetos', [ObjetosController::class , 'buscar'])->name('objetos.buscar');
Route::resource('tipos', 'TiposController')->middleware('auth');
Route::get('/buscarTipos', [TiposController::class , 'buscar'])->name('tipos.buscar');
Route::resource('generaciones', 'GeneracionesController')->middleware('auth')->parameters(['generaciones'=>'generacion']);
Route::get('/buscarGeneraciones', [GeneracionesController::class , 'buscar'])->name('generaciones.buscar');
Route::resource('habilidades', 'HabilidadesController')->parameters(['habilidades'=>'habilidad']);
Route::get('/buscarHabilidades', [HabilidadesController::class , 'buscar'])->name('habilidades.buscar');

require __DIR__ . '/auth.php';
