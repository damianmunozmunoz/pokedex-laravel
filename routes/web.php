<?php

use App\Http\Controllers\EquiposController;
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
Route::resource('objetos', 'ObjetosController');
Route::resource('tipos', 'TiposController')->middleware('auth');
Route::resource('generaciones', 'GeneracionesController')->middleware('auth')->parameters(['generaciones'=>'generacion']);
Route::resource('habilidades', 'HabilidadesController')->parameters(['habilidades'=>'habilidad']);

require __DIR__ . '/auth.php';
