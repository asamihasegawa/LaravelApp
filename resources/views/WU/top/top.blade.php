@extends('WU.layouts.common')
@section('content')
<link href="{{asset('css/assets/WU/top.css')}}" rel="stylesheet">
<div class="top">
    <img class="top" src="{{Storage::disk('local')->url('public/post_images/123.jpeg')}}">

</div>
@endsection
