@extends('WU.layouts.common')
@section('content')
<link href="{{asset('css/assets/WU/top.css')}}" rel="stylesheet">

<div class="top">
  @if ($is_image)
  <figure>
   <img src="{{Storage::disk('local')->url('public/top_images/'. $img->filename )}}" width=1000px >
  </figure>
  @endif

</div>
@endsection
