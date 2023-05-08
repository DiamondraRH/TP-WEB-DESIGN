<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;
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

Route::view('', 'index');
Route::post('/login', [UserController::class , 'login']);
Route::middleware(['checkSession'])->group(function () {
    // Your routes here
    Route::get('/article' , [ArticleController::class , 'toAdd']);
    Route::post('/article' , [ArticleController::class , 'add']);
    Route::get('/articles' , [ArticleController::class , 'toList']);
    Route::get('/article/{id}', [ArticleController::class , 'toUpdate'])->where('id', '[0-9]+');;
    Route::post('/article/update', [ArticleController::class , 'update']);
    Route::get('/article/delete/{id}', [ArticleController::class , 'delete']);
});
