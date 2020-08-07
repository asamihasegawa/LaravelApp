@extends('WU.layouts.common')
@section('content')
<link href="{{asset('css/assets/WU/stockist.css')}}" rel="stylesheet">
<div class="stokist">
  <h1>stokist</h1>

  @foreach($items as $item)
      <div id="cp_iptxt" >
        <p>{{ $item->shop_name }}</p>
        <p>{{ $item->tel }}</p>
        <p>{{ $item->address }}</p>
          <br>
      </div>
  @endforeach
</div>
@endsection
