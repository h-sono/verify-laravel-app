<?php

use Illuminate\Support\Facades\Route;

// ルーティング

// テンプレートエンジン：Bladeを使用
Route::get('hello', 'App\Http\Controllers\HelloController@index');
// POST
Route::post('hello', 'App\Http\Controllers\HelloController@post');
