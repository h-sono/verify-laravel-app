@extends('layouts.helloapp')
@section('title', 'Index')
@section('menubar')
  @parent
  インデックスページ
@endsection
@section('content')
  <p>ここが本文のコンテンツです。</p>
  <p>これが、<middleware>google.com</middleware>へのリンクです。</p>
  <p>これが、<middleware>yahoo.co.jp</middleware>へのリンクです。</p>
@endsection
@section('footer')
  copyright 2023 sonobe
@endsection
