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
Route::get('/article', [ClothingArticleController::class, 'index']);
Route::post('/article', [ClothingArticleController::class, 'store']);
Route::delete('/article/{clothingArticle}', [ClothingArticleController::class, 'destroy']);
Route::get('/article/{clothingArticle}', [ClothingArticleController::class, 'show']);

// clothing article type routes
Route::get('/article-types', [ClothingArticleTypeController::class, 'index']);

// clothing article type top routes
Route::get('/top', [ClothingArticleTopController::class, 'index']);
Route::get('/top/random', [ClothingArticleTopController::class, 'show']);

// clothing article type bottom routes
Route::get('/bottom', [ClothingArticleBottomController::class, 'index']);
Route::get('/bottom/random', [ClothingArticleBottomController::class, 'show']);

// clothing article type shoes routes
Route::get('/shoe', [ClothingArticleShoesController::class, 'index']);
Route::get('/shoe/random', [ClothingArticleShoesController::class, 'show']);

// clothing article type fullbody routes
Route::get('/fullbody', [ClothingArticleFullbodyController::class, 'index']);
Route::get('/fullbody/random', [ClothingArticleFullbodyController::class, 'show']);

