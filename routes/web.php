<?php

use App\Http\Controllers\TwoFactorController;
use App\Livewire\Institution\LandingPageComponent;
use Illuminate\Support\Facades\Route;
use App\Livewire\IdVerification;
use App\Livewire\DocumentVerification;

Route::middleware(['tenant'])->group(function () {
    Route::get('/', LandingPageComponent::class)->name('landing-page');

    Route::get('/auth', [TwoFactorController::class, 'show'])->name('auth.show');
    Route::post('/auth/verify', [TwoFactorController::class, 'verify'])->name('auth.verify');

    Route::get('/id-verification', function () {
        return view('id-verification-page');
    })->name('id.verification');
    Route::get('/document-verification', DocumentVerification::class)->name('document.verification');

    // Route::get('/document-requirements', DocumentRequirements::class)
    //      ->name('document.requirements');
});