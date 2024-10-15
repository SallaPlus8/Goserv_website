<?php

use App\Http\Controllers\Api\Dashboard\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('dashboard')->group(function () {
    // Users routes
    Route::get('/users', [UserController::class, 'index'])->name('dashboard.users.index');
    Route::post('/users', [UserController::class, 'store'])->name('dashboard.users.store');
    Route::get('/users/{id}', [UserController::class, 'show'])->name('dashboard.users.show');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('dashboard.users.update');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('dashboard.users.destroy');
});
