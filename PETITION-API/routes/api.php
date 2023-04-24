<?php

use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\PetitionsController;
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

Route::apiResource('/petitions', PetitionsController::class);
Route::apiResource('/authors', AuthorsController::class)->only([
    "index","show"
]); //To determine the Only methods needed from any type of request whether it being get or Post