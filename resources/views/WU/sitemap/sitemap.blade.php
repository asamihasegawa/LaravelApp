@extends('WU.layouts.common')
@section('content')
<link href="{{asset('css/WU/sitemap.css')}}" rel="stylesheet">
  <div class="sitemap">
    <ul>
        <li ><a href="/news">news</a></li>
        <li ><a href="/about">adout</a></li>
        <li ><a href="/collection">collection</a></li>
        <li ><a href="/stockist">stockist</a></li>
        <li ><a href="/workshop">workshop</a></li>
        <li ><a href="/online">online</a></li>
    </ul>
  </div>
@endsection
