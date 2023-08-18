<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

// コントローラー
class HelloController extends Controller
{
  // アクション

  public function index(Request $request)
  {
    return view('hello.index');
  }

  // テンプレートエンジン：Bladeを使用
  // public function index()
  // {
  //   $data = ['one', 'two', 'three', 'four', 'five'];
  //   return view('hello.index', ['data' => $data]);
  // }
  // formのPOSTメソッド 
  // public function post(Request $request)
  // {
  //   // name="msg"のinputフィールドから値を取り出す。
  //   $data = ['msg' => $request->msg];
  //   return view('hello.index', $data);
  // }

}
