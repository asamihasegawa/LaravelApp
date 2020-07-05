@extends('WU.layouts.common')
@section('content')
<link href="{{asset('css/assets/WU/contact.css')}}" rel="stylesheet">
<div class="confirm">
 <h1>confirm</h1>
  <form action="{{route('contact.send')}}" method="POST">
  @csrf
  <table border="" >
    <tr>
      <td>Name</td>
      <td>{{ $inputs['name'] }}</td>
      <input
          name="name"
          value="{{ $inputs['name'] }}"
          type="hidden">
    </tr>
    <tr>
      <td>メールアドレス</td>
      <td>{{ $inputs['email'] }}</td>
      <input
          name="email"
          value="{{ $inputs['email'] }}"
          type="hidden">
    </tr>
    <tr>
      <td>Tel</td>
      <td>{{ $inputs['tel'] }}</td>
      <input
          name="tel"
          value="{{ $inputs['tel'] }}"
          type="hidden">
    </tr>
    <tr>
      <td>お問い合わせ内容</td>
      <td>{!! nl2br(e($inputs['body'])) !!}</td>
      <input
          name="body"
          value="{{ $inputs['body'] }}"
          type="hidden">
    </tr>
  </table>
  <br>
  <button type="button" name="action" value="back" onclick="history.back()">
    入力内容修正
  </button><br>
  <button type="submit" name="action" value="submit">
    send
  </button>
  </form>
</div>
@endsection
