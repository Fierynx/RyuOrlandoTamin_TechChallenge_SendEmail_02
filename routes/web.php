<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlastController;
use App\Http\Controllers\NotifyController;

Route::get('/', [NotifyController::class, 'view']);

Route::get('/notify', [NotifyController::class, 'view']);

Route::get('/blast', [BlastController::class, 'view']);

Route::post('/post/notify', [NotifyController::class, 'store']);

Route::post('/post/blast', [BlastController::class, 'blast']);
