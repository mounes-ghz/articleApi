<?php

use App\Http\Controllers\Api\BaseArticleController;
use App\Http\Controllers\ArticleController;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


// Route::apiResource('articles', ArticleController::class);

Route::prefix('articles')
    ->name('articles')
    ->group(function(){
        Route::post('/store', [BaseArticleController::class, 'createArticle'])->name('store');

    });

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

