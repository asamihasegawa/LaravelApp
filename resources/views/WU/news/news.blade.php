@extends('WU.layouts.common')
@section('content')
<link href="{{asset('css/assets/WU/news.css')}}" rel="stylesheet">
<div class="news">
  <h1>news</h1>
  <div class="news_contents">
    <div class="news_title">
      @foreach($items as $item)
        <h3>{{ $item->title }}</h3>
        <p>{{ $item->body }}</p>
        <br>
      @endforeach
    </div>
  </div>
</div>
@endsection
