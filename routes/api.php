<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ClothingArticleController;
use \App\Http\Controllers\ClothingArticleTypeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// clothing article routes
Route::get('/articles', [ClothingArticleController::class, 'index']);

// clothing article type routes
Route::get('/article-types', [ClothingArticleTypeController::class, 'index']);
