<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

// Route::get('/task', [TaskController::class, 'index'])->name('task.index');
// Route::get('/task/create', [TaskController::class, 'create'])->name('task.create');
// Route::post('/task', [TaskController::class, 'store'])->name('task.store');
// Route::get('/task/{id}', [TaskController::class, 'show'])->name('task.show');
// Route::get('/task/{id}/edit', [TaskController::class, 'edit'])->name('task.edit');
// Route::put('/task/{id}', [TaskController::class, 'update'])->name('task.update');
// Route::delete('/task/{id}', [TaskController::class, 'destroy'])->name('task.destroy');

Route::resource('task', TaskController::class);
Route::get('/task/{task}/pending', [TaskController::class,'to_pending'])->name('task.pending');
