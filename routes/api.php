<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;

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

Route::get('/adamczyk/52381/readAll', [PeopleController::class, 'readAll']);
Route::get('/adamczyk/52381/read/{id}', [PeopleController::class, 'read']);
Route::post('/adamczyk/52381/create', [PeopleController::class, 'create']);
Route::put('/adamczyk/52381/update/{id}', [PeopleController::class, 'update']);
Route::delete('/adamczyk/52381/delete/{id}', [PeopleController::class, 'delete']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});