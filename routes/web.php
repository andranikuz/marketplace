<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\UsersController::class, 'profile'])->name('profile');
Route::get('/ads/{uuid}', [App\Http\Controllers\AdController::class, 'show'])->name('ads.show');
Route::get('/sities/region/{region_id}', [App\Http\Controllers\CityController::class, 'region'])->name('sities.region');

