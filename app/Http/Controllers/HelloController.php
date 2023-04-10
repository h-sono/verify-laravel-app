<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
  public function index()
  {
    return <<<EOF
        <html>
        <head>
            <title>Hello/Index</title>
            <style>
            body {font-size:16pt; color:#999;}
            h1 {font-size:100pt; text-align:right; color:#999; margin:-40px 0px -50px 0px;}
            </style>
        </head>
        <body>
            <h1>Index</h1>
            <p>Helloコントローラーのアクション</p>
        </body>
        </html>
        EOF;
  }

  public function index_2($id = 'no name', $pass = 'unknown')
  {
    return <<<EOF
        <html>
        <head>
            <title>Hello/Index</title>
            <style>
            body {font-size:16pt; color:#999;}
            h1 {font-size:100pt; text-align:right; color:#999; margin:-40px 0px -50px 0px;}
            </style>
        </head>
        <body>
            <h1>Index</h1>
            <p>id:{$id}</p>
            <p>pass:{$pass}</p>
            <p>Helloコントローラーのアクション</p>
        </body>
        </html>
        EOF;
  }

  public function index_3()
  {
    // グローバル変数呼び出し
    global $head, $style, $body, $end;

    // . で結合
    // 遷移先のページリンクを定義
    $html = $head . tag('title', 'Hello/Index') . $style .
      $body
      . tag('h1', 'Index') . tag('p', 'これはIndexページです')
      . '<a href="/hello_3/other">otherページへ遷移</a>'
      . $end;

    return $html;
  }

  public function other()
  {
    global $head, $style, $body, $end;

    $html = $head . tag('title', 'Hello/Other') . $style .
      $body
      . tag('h1', 'Other') . tag('p', 'これはOtherページです')
      . $end;

    return $html;
  }
}
