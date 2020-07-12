@extends('WU.layouts.common')
@section('content')
<link href="{{asset('css/assets/WU/news.css')}}" rel="stylesheet">
<div class="news">
  <h1>news</h1>
  <div class="news_contents">
      @foreach($items as $item)
        <p>{{ $item->title }}</p>
      @endforeach
      @foreach($items as $item)
      <p>{{ $item->body }}</p>
      @endforeach
  </div>
  <div class="side_contents">
    <ul>
      <li>2020.6</li>
      <li>2020.5</li>
      <li>2020.4</li>
      <li>2020.3</li>
    </ul>
  </div>
  <div class="">

  </div>
</div>
@endsection
