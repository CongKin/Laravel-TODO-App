<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::redirect('/', '/task')->name('dashboard');

Route::middleware(['auth'])->group(function () {
    // Route::get('/task', [TaskController::class, 'index'])->name('task.index');
    // Route::get('/task/create', [TaskController::class, 'create'])->name('task.create');
    // Route::post('/task', [TaskController::class, 'store'])->name('task.store');
    // Route::get('/task/{id}', [TaskController::class, 'show'])->name('task.show');
    // Route::get('/task/{id}/edit', [TaskController::class, 'edit'])->name('task.edit');
    // Route::put('/task/{id}', [TaskController::class, 'update'])->name('task.update');
    // Route::delete('/task/{id}', [TaskController::class, 'destroy'])->name('task.destroy');

    Route::resource('task', TaskController::class);
    Route::put('/task/{task}/update_status', [TaskController::class,'update_status'])->name('task.update_status');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
