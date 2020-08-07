@extends('WU.layouts.common')
@section('content')
<link href="{{asset('css/assets/WU/contact.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
<div class="confirm">
  <h1>confirm</h1>
  <form action="{{route('contact.send')}}" method="POST">
  @csrf
      NAME
      {{ $inputs['name'] }}
      <input name="name" value="{{ $inputs['name'] }}" type="hidden">
      <br>
      EMAIL
      {{ $inputs['email'] }}
      <input name="email" value="{{ $inputs['email'] }}" type="hidden">
      <br>
      TEL
      {{ $inputs['tel'] }}
      <input name="tel" value="{{ $inputs['tel'] }}" type="hidden">

      お問い合わせ内容
      {!! nl2br(e($inputs['body'])) !!}
      <input name="body" value="{{ $inputs['body'] }}" type="hidden">

  <br>
  <button class="btn btn-border-shadow btn-border-shadow--color2" type="button" name="action" value="back" onclick="history.back()">
    入力内容修正
  </button>
  <br>
  <br>
  <button class="btn btn-border-shadow btn-border-shadow--color2" type="submit" name="action" value="submit">
    <i class="fa fa-paper-plane"></i>
     S E N D
    <i class="fa fa-paper-plane"></i>
  </button>
  </form>
</div>
@endsection
