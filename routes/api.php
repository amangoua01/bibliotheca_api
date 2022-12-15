<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Categorie
Route::get("/categorie", [\App\Http\Controllers\CategorieController::class, "getAll"]);
Route::post("/categorie/create", [\App\Http\Controllers\CategorieController::class, "create"]);
Route::post("/categorie/update", [\App\Http\Controllers\CategorieController::class, "update"]);
Route::get("/categorie/delete/{id}", [\App\Http\Controllers\CategorieController::class, "delete"]);

//Auteur
Route::get("/auteur", [\App\Http\Controllers\AuteurController::class, "getAll"]);
Route::post("/auteur/create", [\App\Http\Controllers\AuteurController::class, "create"]);
Route::post("/auteur/update", [\App\Http\Controllers\AuteurController::class, "update"]);
Route::get("/auteur/delete/{id}", [\App\Http\Controllers\AuteurController::class, "delete"]);

//Categorie
Route::get("/livre", [\App\Http\Controllers\LivreController::class, "getAll"]);
Route::post("/livre/create", [\App\Http\Controllers\LivreController::class, "create"]);
Route::post("/livre/update", [\App\Http\Controllers\LivreController::class, "update"]);
Route::get("/livre/delete/{id}", [\App\Http\Controllers\LivreController::class, "delete"]);
