@extends('WU.layouts.common')
@section('content')
<link href="{{asset('css/assets/WU/contact.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
<div class="contact">
  <h1>contact</h1>
  <form method="POST" action="{{ route('contact.confirm') }}">
       @csrf
       <div class="cp_iptxt">
        <input type="text" name="name" placeholder="NAME" value="{{old('name')}}">
	      <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
        @if ($errors->has('name'))
         <p class="error-message">{{ $errors->first('name') }}</p>
        @endif
       </div>
       <div class="cp_iptxt">
	      <input type="text" name="email" placeholder="MAIL" value="{{old('email')}}">
	      <i class="fas fa-envelope"></i>
        @if ($errors->has('email'))
         <p class="error-message">{{ $errors->first('email') }}</p>
        @endif
       </div>

       <div class="cp_iptxt">
         <i class="fas fa-phone"></i>
         <input type="text" name="tel" placeholder="TEL" value="{{old('tel')}}">
           @if ($errors->has('tel'))
            <p class="error-message">{{ $errors->first('tel') }}</p>
           @endif
       </div>
       <div class="cp_iptxt">
         <i class="fas fa-comment"></i>
         <textarea name="body" rows="10" cols="" placeholder="MESSAGE"></textarea>
           @if ($errors->has('body'))
             <p class="error-message">{{ $errors->first('body') }}</p>
           @endif
       </div>
      <button class="btn btn-border-shadow btn-border-shadow--color2" type="submit" name="button">
        SEND
      <i class="fa fa-paper-plane"></i>
    </button>

  </form>
</div>
@endsection
