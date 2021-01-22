<?php
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::any('/email/verify/{id}/{hash}', [App\Http\Controllers\Auth\VerificationController::class, 'verify'])
	->name('verification.verify');

Route::get('/email/verify', [App\Http\Controllers\Auth\VerificationController::class, 'show'])
	->name('verification.notice');

Route::post('/email/verification-notification', [App\Http\Controllers\Auth\VerificationController::class, 'resend'])
	->name('verification.resend');