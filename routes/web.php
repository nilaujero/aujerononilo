<?php

use App\Http\Controllers\DogsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/dogs', [DogsController::class, 'index'])->name('dogs.index');
Route::get('/dogs/create', [DogsController::class, 'create'])->name('dogs.create');
Route::post('/dogs', [DogsController::class, 'store'])->name('dogs.store');
Route::get('/dogs/{dogs}', [DogsController::class, 'show'])->name('dogs.show');
Route::get('/dogs/{dogs}/edit', [DogsController::class, 'edit'])->name('dogs.edit');
Route::put('/dogs/{dogs}', [DogsController::class, 'update'])->name('dogs.update');
Route::delete('/dogs/{dogs}', [DogsController::class, 'destroy'])->name('dogs.destroy');
