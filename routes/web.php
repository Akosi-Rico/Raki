<?php

use App\Livewire\Institution\LandingPageComponent;
use Illuminate\Support\Facades\Route;

Route::middleware(['tenant'])->group(function () {
    Route::get('/', LandingPageComponent::class)->name('landing-page');
});
