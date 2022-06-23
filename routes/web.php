<?php

use App\Http\Controllers\PersonalsEventsController;
use App\Http\Controllers\PasswordsEventsController;
use App\Http\Controllers\CardsEventsController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", ProjectController::class);

Route::get("/passwords", [PasswordsEventsController::class, "index"]);
Route::get("/passwords/edycja/{ID}", [PasswordsEventsController::class, "edit"]);
Route::post("/passwords/aktualizacja/{ID}", [PasswordsEventsController::class, "update"]);
Route::get("/passwords/usuwanie/{ID}", [PasswordsEventsController::class, "delete"]);
Route::get("/passwords/nowe", [PasswordsEventsController::class, "create"]);
Route::post("/passwords/dodaj", [PasswordsEventsController::class, "addToDB"]);

Route::get("/cards", [CardsEventsController::class, "index"]);
Route::get("/cards/edycja/{ID}", [CardsEventsController::class, "edit"]);
Route::post("/cards/aktualizacja/{ID}", [CardsEventsController::class, "update"]);
Route::get("/cards/usuwanie/{ID}", [CardsEventsController::class, "delete"]);
Route::get("/cards/nowe", [CardsEventsController::class, "create"]);
Route::post("/cards/dodaj", [CardsEventsController::class, "addToDB"]);

Route::get("/personal", [PersonalsEventsController::class, "index"]);
Route::get("/personal/edycja/{ID}", [PersonalsEventsController::class, "edit"]);
Route::post("/personal/aktualizacja/{ID}", [PersonalsEventsController::class, "update"]);
Route::get("/personal/usuwanie/{ID}", [PersonalsEventsController::class, "delete"]);
Route::get("/personal/nowe", [PersonalsEventsController::class, "create"]);
Route::post("/personal/dodaj", [PersonalsEventsController::class, "addToDB"]);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
