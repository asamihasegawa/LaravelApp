@extends('WU.layouts.common')
@section('content')
<link href="{{asset('css/assets/WU/contact.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
<div class="confirm">
  <h1>confirm</h1>
  <form action="{{route('contact.send')}}" method="POST">
  @csrf
      <div id="cp_iptxt">
      <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
      <p>{{ $inputs['name'] }}</p>
      <input name="name" value="{{ $inputs['name'] }}" type="hidden">
      </div>
      <br>
      <div id="cp_iptxt">
      <i class="fas fa-envelope"></i>
      <p>{{ $inputs['email'] }}</p>
      <input name="email" value="{{ $inputs['email'] }}" type="hidden">
      </div>
      <br>
      <div id="cp_iptxt">
      <i class="fas fa-phone"></i>
      <p>{{ $inputs['tel'] }}</p>
      <input name="tel" value="{{ $inputs['tel'] }}" type="hidden">
      </div>
      <br>
      <div id="cp_iptxt">
      <i class="fas fa-comment"></i>
      <p>{!! nl2br(e($inputs['body'])) !!}</p>
      <input name="body" value="{{ $inputs['body'] }}" type="hidden">
      </div>


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
