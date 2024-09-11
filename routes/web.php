<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

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

Route::get('/', function () {
    return view('game.start'); // Render a welcome page
});
Route::get('/instructions', [GameController::class, 'showStartPage'])->name('game.start');
Route::get('/game/{id}', [GameController::class, 'showScene'])->name('game.scene'); // Route to display a specific scene
Route::get('/game/{scene_id}/hint', [GameController::class, 'showHint'])->name('game.hint'); // Route to get a hint for the scene
Route::get('/save-progress/{scene_id}', [GameController::class, 'saveProgress'])->name('game.saveProgress');
Route::get('/resume-game', [GameController::class, 'resumeGame'])->name('game.resumeGame');
