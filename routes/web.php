<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/profile/password', [ProfileController::class, 'password'])->name('profile.password');
    Route::patch('/profile/password', [ProfileController::class, 'passwordUpdate'])->name('profile.password.update');
});


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/faqs', [FaqController::class, 'index'])->name('faqs');

Route::get('/register', [RegistrationController::class, 'create'])->name('register');
Route::post('/register', [RegistrationController::class, 'store']);


// Admin Routes

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::post('/admin/participants/bulk-delete', [AdminController::class, 'bulkDelete'])->name('admin.bulk-delete');
    Route::delete('/admin/{participant}', [AdminController::class, 'destroy'])->name('admin.destroy');
});
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
    Route::delete('/participants/{participant}', [App\Http\Controllers\AdminController::class, 'destroy'])->name('admin.destroy');
    Route::put('/participants/{participant}', [App\Http\Controllers\AdminController::class, 'update'])->name('admin.update');
});

require __DIR__.'/auth.php';



