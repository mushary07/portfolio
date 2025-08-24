<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'home'])->name('home');
Route::get('about', [PortfolioController::class, 'about'])->name('about');
Route::get('works', [PortfolioController::class, 'works'])->name('works');
Route::get('works/{id}', [PortfolioController::class, 'work_detail'])->name('work-detail');
Route::get('contact', [PortfolioController::class, 'contact'])->name('contact');
Route::get('credential', [PortfolioController::class, 'credential'])->name('credential');
Route::post('mail', [PortfolioController::class, 'mail'])->name('mail');
