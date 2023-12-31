<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryeController;
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


// Category Api
Route::controller(CategoryeController::class)->group(function () {
    Route::get('category/', 'index'); // Show All Categoryies
    Route::post('category/', 'store'); // Add Nw Category
    Route::get('category/{id}', 'show'); // Show Specific Category
    Route::get('category/{id}/edit', 'edit'); // Edit Specific Category
    Route::post('category/{id}', 'destroy'); // Delete Specific Category
});
