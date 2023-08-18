<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\HelloMiddleware;

// ルーティング

// GET
Route::get('hello', 'App\Http\Controllers\HelloController@index')->middleware(HelloMiddleware::class);
// POST
Route::post('hello', 'App\Http\Controllers\HelloController@post');
