@extends('WU.layouts.common')
@section('content')
<link href="{{asset('css/assets/WU/news.css')}}" rel="stylesheet">
<div class="news">
  <h1>news</h1>
  <div class="news_contents">
    <div class="news_title">
      @foreach($items as $item)
        <p>{{ $item->title }}</p>
      @endforeach
    </div>
    <div class="news_body">
      @foreach($items as $item)
      <p>{{ $item->body }}</p>
      @endforeach
    </div>
  </div>
</div>
@endsection
