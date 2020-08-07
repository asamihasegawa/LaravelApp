@extends('WU.layouts.common')
@section('content')
<link href="{{asset('css/assets/WU/about.css')}}" rel="stylesheet">
<div class="about">
  <h1>about</h1>
  <div class="about_main">
    <div class="about_contents">
      @if ($is_image)
      @foreach($img as $i)
     <img src="{{Storage::disk('local')->url('public/about_images/'. $i->filename )}}" width=1000px >
     @endforeach
     @endif
    </div>
    <div class="about_contents">
      <div class="about_contents_2">
            @if ($is_image)
            @foreach($img as $i)
            <p>{{ $i->body }}</p>
            @endforeach
            @endif
           </div>
    </div>
  </div>
</div>
@endsection
