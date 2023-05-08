<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Middleware\GzipMiddleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::middleware(['gzip'])->group(function () {
    // Your routes here
    Route::get('/', [ArticleController::class , 'toList']);
    Route::get('/articles' , [ArticleController::class , 'toList']);
    Route::get('/article/{slug}' , [ArticleController::class , 'detail']);
// });
