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
     <p>
           <div class="alert alert-primary" role="alert">
            @if ($is_image)
            @foreach($img as $i)
            {{ $i->body }}
            @endforeach
            @endif
           </div>
     </p>
    </div>
  </div>
</div>
@endsection
