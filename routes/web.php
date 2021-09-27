<?php

use App\Http\Controllers\ArtigosController;
use Illuminate\Support\Facades\Route;

Route::get('/artigos', [ArtigosController::class, 'index'])->name('artigos');
Route::get('/artigos/criar', [ArtigosController::class, 'criar'])->name('artigos.criar');

Route::post('/artigos/{id}/editar', [ArtigosController::class, 'find'])->name('artigos.find');
Route::post('/artigos/criar', [ArtigosController::class, 'store'])->name('artigos.store');
Route::post('/artigos/editar/{id}', [ArtigosController::class, 'edit'])->name('artigos.edit');
Route::post('/artigos/{id}', [ArtigosController::class, 'destroy'])->name('artigos.destroy');
