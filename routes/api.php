<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\IntegrationController;


Route::middleware(['tenant'])->group(function () {
    Route::post('/verify-key', [IntegrationController::class, 'verifyKey'])->name('verify-key');
    Route::post('/process-attendance', [IntegrationController::class, 'processAttendance']);
    Route::post('/process-document', [IntegrationController::class, 'processDocument']);
});
