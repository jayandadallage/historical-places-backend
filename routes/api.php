<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\AuthController;

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/places', [PlaceController::class, 'index']);
    Route::post('/places/{id}/visited', [PlaceController::class, 'markVisited']);
    Route::post('/places/{placeId}/toggle-visited', [PlaceController::class, 'toggleVisited']);
    Route::get('/places/visited', [PlaceController::class, 'getVisitedPlaces']);
    Route::get('/places/{id}', [PlaceController::class, 'show']);
});
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
Route::middleware('auth:api')->get('/validate-token', function (Request $request) {
    return response()->json(['message' => 'Token is valid']);
});

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
