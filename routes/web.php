<?php

use Illuminate\Support\Facades\Route;

// コントローラー：HelloControllerのアクション：indexメソッドを使用するルート
Route::get('hello', 'App\Http\Controllers\HelloController@index');
// {id?}：?で任意のパラメータ
Route::get('hello_2/{id?}/{pass?}', 'App\Http\Controllers\HelloController@index_2');
Route::get('hello_3', 'App\Http\Controllers\HelloController@index_3');
Route::get('hello_3/other', 'App\Http\Controllers\HelloController@other');

// Route::get('/', function () {
//     return view('welcome');
// });

// $html = <<<EOF
// <html>
// <head>
// <title>Hello</title>
// <style>
// body {font-size:16pt; color:#999;}
// h1 {font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px;}
// </style>
// </head>
// <body>
//     <h1>Hello</h1>
//     <p>This is sample page.</p>
//     <p>サンプルページ</p>
// </body>
// </html>
// EOF;

// Route::get('hello', function () use ($html) {
//     return $html;
// });

// Route::get('hello/{id}/{pass}', function ($id, $pass) {
// $html = <<<EOF
// <html>
// <head>
// <title>Hello</title>
// <style>
// body {font-size:16pt; color:#999;}
// h1 {font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px;}
// </style>
// </head>
// <body>
//     <h1>Hello</h1>
//     <p>id:{$id}</p>
//     <p>pass:{$pass}</p>
//     <p>サンプルページ</p>
// </body>
// </html>
// EOF;

//     return $html;
// });

// Route::get('hello/{msg?}', function ($msg='no message') {
// $html = <<<EOF
// <html>
// <head>
// <title>Hello</title>
// <style>
// body {font-size:16pt; color:#999;}
// h1 {font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px;}
// </style>
// </head>
// <body>
//     <h1>Hello</h1>
//     <p>{$msg}</p>
//     <p>サンプルページ</p>
// </body>
// </html>
// EOF;

//     return $html;
// });
