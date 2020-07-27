@extends('WU.layouts.common')
@section('content')
<link href="{{asset('css/assets/WU/top.css')}}" rel="stylesheet">

<div class="top">
  @if ($is_image)
  @foreach($img as $i)
  <figure>
       <img src="{{Storage::disk('local')->url('public/top_images/'. $i->filename )}}" width=1000px >
  </figure>
  
  @endforeach
  @endif

</div>
@endsection
