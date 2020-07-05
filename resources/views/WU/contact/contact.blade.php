@extends('WU.layouts.common')
@section('content')
<link href="{{asset('css/assets/WU/contact.css')}}" rel="stylesheet">
<div class="contact">
  <h1>contact</h1>
  <form method="POST" action="{{ route('contact.confirm') }}">
    <table width="50%" border="" class="contactform">
       @csrf
       <tr>
         <td>Name</td>
         <td><input type="text" name="name" value="{{old('name')}}">
           @if ($errors->has('name'))
            <p class="error-message">{{ $errors->first('name') }}</p>
           @endif
         <br>
         </td>
       </tr>
       <tr>
         <td>Mail</td>
         <td><input type="text" name="email" value="{{old('email')}}">
           @if ($errors->has('email'))
            <p class="error-message">{{ $errors->first('email') }}</p>
           @endif
         <br>
         </td>
       </tr>
       <tr>
         <td>Tel</td>
         <td><input type="text" name="tel" value="{{old('tel')}}">
           @if ($errors->has('tel'))
            <p class="error-message">{{ $errors->first('tel') }}</p>
           @endif
          <br>
        </td>
       </tr>
      <tr>
        <td>Message</td>
        <td><textarea name="body" rows="8" cols="80"></textarea>
          @if ($errors->has('body'))
            <p class="error-message">{{ $errors->first('body') }}</p>
          @endif
          <br>
        </td>
      </tr>
      </table>
      <br>
      <input type="submit" name="" value="send">
  </form>
</div>
@endsection
