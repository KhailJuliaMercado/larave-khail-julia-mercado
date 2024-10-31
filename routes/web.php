<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResumeController;

// Route the root URL to ResumeController's index method
Route::get('/', [ResumeController::class, 'index']);
