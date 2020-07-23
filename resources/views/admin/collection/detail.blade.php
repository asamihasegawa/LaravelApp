@extends('admin.common')
@section('content')
<link href="{{asset('css/assets/WM/top.css')}}" rel="stylesheet">
<div class="">
  <p>タイトル：{{ $title }}</p>
  <p>詳細内容：{{ $body }}</p>
</div>
@endsection
