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
// route pour ajout
Route::post('ajouter', [EleveController::class, 'ajouterEleve']);

// route pour modifier
Route::put('modifier/{id}', [EleveController::class, 'modifier']);

// route pour supprimer
Route::delete('supprimer-eleve/{id}', [EleveController::class, 'supprimer']);

// route pour lister tous les eleves
Route::get('listerAndu', [EleveController::class, 'lister']);

// route pour liste un seul eleve
Route::get('listerAndu/{id}', [EleveController::class, 'listerId']);
