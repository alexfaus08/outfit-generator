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
// TODO upload article
Route::get('/articles', [ClothingArticleController::class, 'index']);
Route::post('/articles', [ClothingArticleController::class, 'store']);

// clothing article type routes
Route::get('/article-types', [ClothingArticleTypeController::class, 'index']);

// clothing article type top routes
Route::get('/tops', [ClothingArticleTopController::class, 'index']);
Route::get('/tops/random', [ClothingArticleTopController::class, 'show']);

// clothing article type bottom routes
Route::get('/bottoms', [ClothingArticleBottomController::class, 'index']);
Route::get('/bottoms/random', [ClothingArticleBottomController::class, 'show']);

// clothing article type shoes routes
Route::get('/shoes', [ClothingArticleShoesController::class, 'index']);
Route::get('/shoes/random', [ClothingArticleShoesController::class, 'show']);

// clothing article type fullbody routes
Route::get('/fullbody', [ClothingArticleFullbodyController::class, 'index']);
Route::get('/fullbody/random', [ClothingArticleFullbodyController::class, 'show']);

