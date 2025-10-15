<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpensesController; //prueba

Route::get('/', function () {
    return view('auth.register');
});

//use App\Http\Controllers\ExpensesController;

Route::resource('expenses', ExpensesController::class);

Route::get('/table', [ExpensesController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('table');

// Route::get('/dashboard', function () {
//     return view('expenses.index'); //dashboard
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [ExpensesController::class, 'create'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
