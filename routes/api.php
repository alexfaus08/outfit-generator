<?php

use App\Http\Controllers\ClothingArticleBottomController;
use App\Http\Controllers\ClothingArticleFullbodyController;
use App\Http\Controllers\ClothingArticleShoesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ClothingArticleController;
use \App\Http\Controllers\ClothingArticleTypeController;
use \App\Http\Controllers\ClothingArticleTopController;

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

// clothing article type top routes
Route::get('/tops', [ClothingArticleTopController::class, 'index']);

// clothing article type bottom routes
Route::get('/bottoms', [ClothingArticleBottomController::class, 'index']);

// clothing article type shoes routes
Route::get('/shoes', [ClothingArticleShoesController::class, 'index']);

// clothing article type fullbody routes
Route::get('/fullbody', [ClothingArticleFullbodyController::class, 'index']);
