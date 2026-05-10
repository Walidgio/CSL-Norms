<?php

use Illuminate\Support\Facades\Route;
use CivilSoftLab\Norms\Http\Controllers\NormsController;

Route::get('/norms', [NormsController::class, 'index'])->name('norms');
Route::get('/norms/{slug}', [NormsController::class, 'show'])->name('norms.show');
