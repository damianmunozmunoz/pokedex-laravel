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
Route::get('pokemons/delete/{pokemon}', 'PokemonsController@destroy')->name('pokemons.myDestroy');
Route::resource('objetos', 'ObjetosController');
Route::get('objetos/delete/{objeto}', 'ObjetosController@destroy');
Route::resource('tipos', 'TiposController')->middleware('auth');
Route::get('tipos/delete/{tipo}', 'TiposController@destroy');
Route::resource('generaciones', 'GeneracionesController')->middleware('auth');
Route::get('generaciones/delete/{tipo}', 'GeneracionesController@destroy');
Route::resource('equipos', 'EquiposController')->middleware('auth');
Route::get('equipos/delete/{equipo}', 'EquiposController@destroy');

require __DIR__ . '/auth.php';
