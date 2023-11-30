<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\SportController;
use App\Http\Controllers\API\LeagueController;
use App\Http\Controllers\API\CompetenceController;
use App\Http\Controllers\API\RealisationController;
use App\Http\Controllers\API\StatisticController;

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

Route::apiResource('users', UserController::class);
Route::apiResource('sports', SportController::class);
Route::apiResource('teams', TeamController::class);
Route::apiResource('realisation', RealisationController::class);
Route::apiResource('league', LeagueController::class);
Route::apiResource('competence', CompetenceController::class);
Route::apiResource('statistic', StatisticController::class);
