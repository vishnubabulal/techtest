<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

//Route::get('/', [ArticleController::class, 'articles']);
Route::get('/', [ArticleController::class, 'index']);

Route::get('/articles', [ArticleController::class, 'index']);
Route::post('/articles', [ArticleController::class, 'store']);
Route::get('/articles/{id}', [ArticleController::class, 'show']);
Route::put('/articles/{id}', [ArticleController::class, 'update']);
Route::delete('/articles/{id}', [ArticleController::class, 'destroy']);
Route::get('/upload-test', [App\Http\Controllers\UploadController::class, 'testUpload']);


