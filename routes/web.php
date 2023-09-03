<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;

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
Route::get('/adamczyk/52381/readAll', [PeopleController::class, 'readAll']);
Route::get('/adamczyk/52381/read/{id}', [PeopleController::class, 'read']);
Route::post('/adamczyk/52381/create', [PeopleController::class, 'create']);
Route::put('/adamczyk/52381/update/{id}', [PeopleController::class, 'update']);
Route::delete('/adamczyk/52381/delete/{id}', [PeopleController::class, 'delete']);

Route::get('/', function () {
    return view('welcome');
});