<?php

use App\Http\Controllers\TwoFactorController;
use App\Livewire\Institution\LandingPageComponent;
use Illuminate\Support\Facades\Route;

Route::middleware(['tenant'])->group(function () {
    Route::get('/', LandingPageComponent::class)->name('landing-page');

    Route::get('/auth', [TwoFactorController::class, 'show'])->name('auth.show');
    Route::post('/auth/verify', [TwoFactorController::class, 'verify'])->name('auth.verify');

});