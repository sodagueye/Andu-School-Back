<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EleveController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('ajouter', [EleveController::class, 'ajouterEleve']);
Route::put('modifier/{id}', [EleveController::class, 'modifier']);

Route::delete('supprimer-eleve/{id}', [EleveController::class, 'supprimer']);
Route::get('listerEleve', [EleveController::class, 'lister']);
