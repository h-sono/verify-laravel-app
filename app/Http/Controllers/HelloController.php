<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

// グローバル変数定義
global $head, $style, $body, $end;
$head = '<html><head>';
$style = <<<EOF
<style>
body {font-size:16pt; color:#999;}
h1 {font-size:100pt; text-align:right; color:#999; margin:-40px 0px -50px 0px;}
</style>
EOF;
$body = '</head><body>';
$end = '</body></html>';

// タグ生成用メソッド
function tag($tag, $txt)
{
  return "<{$tag}>" . $txt . "</{$tag}>";
}

// コントローラー
class HelloController extends Controller
{
  // アクション

  // テンプレートエンジン：Bladeを使用
  public function index()
  {
    $data = [
      'msg' => '名前を入力してください。'
    ];
    return view('hello.index', $data);
  }
  // formのPOSTメソッド 
  public function post(Request $request)
  {
    // name="msg"のinputフィールドから値を取り出す。
    $msg = $request->msg;
    $data = [
      'msg' => 'こんにちは、' . $msg . 'さん。'
    ];
    return view('hello.index', $data);
  }

  // コントローラーでテンプレート使用(クエリパラメータをテンプレートに渡す)
  // public function index(Request $request)
  // {
  //   $data = [
  //     'msg' => 'コントローラーから渡されたメッセージ。',
  //     'msg2' => 'コントローラーから渡されたメッセージ2。',
  //     'id' => $request->id
  //   ];
  //   return view('hello.index', $data);
  // }

  // // コントローラーでテンプレート使用(ルートパラメータをテンプレートに渡す)
  // public function index($id = 'zero')
  // {
  //   $data = [
  //     'msg' => 'コントローラーから渡されたメッセージ。',
  //     'msg2' => 'コントローラーから渡されたメッセージ2。',
  //     'id' => $id
  //   ];
  //   return view('hello.index', $data);
  // }

  // リクエスト/レスポンス
  // public function index(Request $request, Response $response)
  // {
  //   $html = <<<EOF
  //     <html>
  //     <head>
  //     <title>Hello/Index</title>
  //     <style>
  //     body {font-size:16pt; color:#999;}
  //     h1 {font-size:100pt; text-align:right; color:#999; margin:-40px 0px -50px 0px;}
  //     </style>
  //     </head>
  //     <body>
  //       <h1>Hello</h1>
  //       <h3>Request</h3>
  //       <pre>{$request}</pre>
  //       <h3>Response</h3>
  //       <pre>{$response}</pre>
  //     </body>
  //     </html>
  //     EOF;

  //   $response->setContent($html);
  //   return $response;
  // }

  // シングルアクション
  // public function __invoke()
  // {
  //   return <<<EOF
  //   <html>
  //   <head>
  //   <title>Hello</title>
  //   <style>
  //   body {font-size:16pt; color:#999;}
  //   h1 {font-size:100pt; text-align:right; color:#999; margin:-40px 0px -50px 0px;}
  //   </style>
  //   </head>
  //   <body>
  //     <h1>Single Action</h1>
  //     <p>シングルアクションコントローラー</p>
  //   </body>
  //   </html>
  //   EOF;
  // }

  // public function index()
  // {
  //   return <<<EOF
  //       <html>
  //       <head>
  //           <title>Hello/Index</title>
  //           <style>
  //           body {font-size:16pt; color:#999;}
  //           h1 {font-size:100pt; text-align:right; color:#999; margin:-40px 0px -50px 0px;}
  //           </style>
  //       </head>
  //       <body>
  //           <h1>Index</h1>
  //           <p>Helloコントローラーのアクション</p>
  //       </body>
  //       </html>
  //       EOF;
  // }

  // public function index_2($id = 'no name', $pass = 'unknown')
  // {
  //   return <<<EOF
  //       <html>
  //       <head>
  //           <title>Hello/Index</title>
  //           <style>
  //           body {font-size:16pt; color:#999;}
  //           h1 {font-size:100pt; text-align:right; color:#999; margin:-40px 0px -50px 0px;}
  //           </style>
  //       </head>
  //       <body>
  //           <h1>Index</h1>
  //           <p>id:{$id}</p>
  //           <p>pass:{$pass}</p>
  //           <p>Helloコントローラーのアクション</p>
  //       </body>
  //       </html>
  //       EOF;
  // }

  // public function index_3()
  // {
  //   // グローバル変数呼び出し
  //   global $head, $style, $body, $end;

  //   // . で結合
  //   // 遷移先のページリンクを定義
  //   $html = $head . tag('title', 'Hello/Index') . $style .
  //     $body
  //     . tag('h1', 'Index') . tag('p', 'これはIndexページです')
  //     . '<a href="/hello_3/other">otherページへ遷移</a>'
  //     . $end;

  //   return $html;
  // }

  // public function other()
  // {
  //   global $head, $style, $body, $end;

  //   $html = $head . tag('title', 'Hello/Other') . $style .
  //     $body
  //     . tag('h1', 'Other') . tag('p', 'これはOtherページです')
  //     . $end;

  //   return $html;
  // }
}
