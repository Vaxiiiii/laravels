<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

// Uncomment and modify the following lines as needed:
// Route::get('Users/id', [StudentController::class, 'index']);
// Route::get('Users/id', [StudentController::class, 'goto']);

Route::get('Users/id', [StudentController::class, 'show']);
