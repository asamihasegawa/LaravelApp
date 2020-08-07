@extends('WU.layouts.common')
@section('content')
<link href="{{asset('css/assets/WU/stockist.css')}}" rel="stylesheet">
<div class="stokist">
  <h1>stokist</h1>

  @foreach($items as $item)
      <div class="" role="alert">
          {{ $item->shop_name }}<br>
          {{ $item->tel }}<br>
          {{ $item->address }}<br><br>
      </div>
  @endforeach
</div>
@endsection
