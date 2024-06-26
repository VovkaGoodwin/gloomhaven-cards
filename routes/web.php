<?php

use App\Http\Controllers\CardsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CardsController::class, 'index']);
Route::get('/cads', [CardsController::class, 'index']);
Route::post('/search', [CardsController::class, 'search']);

Route::get('/create', [CardsController::class, 'newCard']);

Route::post('/cards', [CardsController::class, 'create']);
Route::put('/cards', [CardsController::class, 'updateCard']);
Route::get('/cards/{card}', [CardsController::class, 'showCard']);
Route::delete('/cards/{card}', [CardsController::class, 'deleteCard']);

Route::get('/cards/{card}/edit', [CardsController::class, 'editCard']);

