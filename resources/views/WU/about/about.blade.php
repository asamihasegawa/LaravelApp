@extends('WU.layouts.common')
@section('content')
<link href="{{asset('css/assets/WU/about.css')}}" rel="stylesheet">
<div class="about">
  <h1>about</h1>
  <div class="about_main">
    <div class="about_contents">
     <img src="{{asset('images/about.jpg')}}" alt="about">
    </div>
    <div class="about_contents">
     <p>
       @foreach($items as $item)
           <div class="alert alert-primary" role="alert">
               {{ $item->body }}
           </div>
       @endforeach
     </p>
    </div>
  </div>
</div>
@endsection
