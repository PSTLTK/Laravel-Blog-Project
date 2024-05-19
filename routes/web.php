<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return redirect('/post/list');
});

Route::get('/post/list', [PostController::class, 'index']);
Route::get('/post/create',[PostController::class,'create']);
Route::post('/post/create',[PostController::class,'store']);
Route::get('/post/detail/{id}',[PostController::class,'show']);
Route::get('/post/update/{id}',[PostController::class,'edit']);
Route::post('/post/update/{id}',[PostController::class,'update']);
Route::get('/post/delete/{id}',[PostController::class,'destroy']);
