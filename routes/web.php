<?php

use App\Http\Controllers\ArtigosController;
use Illuminate\Support\Facades\Route;

Route::get('/artigos', [ArtigosController::class, 'index'])->name('artigos');
Route::get('/artigos/criar', [ArtigosController::class, 'criar'])->name('artigos.criar');
Route::post('/artigos/criar', [ArtigosController::class, 'store'])->name('artigos.store');
Route::post('/artigos/{id}', [ArtigosController::class, 'destroy'])->name('artigos.destroy');
