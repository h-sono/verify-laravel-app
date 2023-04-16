<?php

use Illuminate\Support\Facades\Route;

// ルーティング

// コントローラー：HelloControllerのアクション：indexメソッドを使用するルート
// Route::get('hello', 'App\Http\Controllers\HelloController@index');
// {id?}：?で任意のパラメータ
// Route::get('hello_2/{id?}/{pass?}', 'App\Http\Controllers\HelloController@index_2');
// Route::get('hello_3', 'App\Http\Controllers\HelloController@index_3');
// Route::get('hello_3/other', 'App\Http\Controllers\HelloController@other');
// シングルアクション
// Route::get('hello_4', 'App\Http\Controllers\HelloController');
// リクエスト/レスポンス
// Route::get('hello_5', 'App\Http\Controllers\HelloController@index');
// テンプレート使用(resources\views\hello\index.php読み取り)
// Route::get('hello_tmp', function () {
//   return view('hello.index');
// });

// コントローラーでテンプレート使用(ルートパラメータをテンプレートに渡す)
// Route::get('hello_tmp_2/{id?}', 'App\Http\Controllers\HelloController@index');

// コントローラーでテンプレート使用(クエリパラメータをテンプレートに渡す)
// http://127.0.0.1:8000/hello_tmp_3/?id=test_id などでアクセス
// Route::get('hello_tmp_3', 'App\Http\Controllers\HelloController@index');

// テンプレートエンジン：Bladeを使用
Route::get('hello_blade', 'App\Http\Controllers\HelloController@index');
// POST
Route::post('hello_blade', 'App\Http\Controllers\HelloController@post');
