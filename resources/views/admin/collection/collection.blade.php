@extends('admin.common')
@section('content')
<h3>collection</h3>
<link href="{{asset('css/assets/WM/top.css')}}" rel="stylesheet">
<div class="">
  <form method="post" action="{{ route('collection.create') }}" enctype="multipart/form-data">
 @csrf
       <div class="form">
           <div class="form-title">
             <label for="title">タイトル</label>
             <input class="" name="title" value="{{ old('title') }}">
           </div>

           <div class="form-content">
             <label for="body" class="form-content">詳細</label>
             <textarea class="" name="body" cols="50" rows="10">{{ old('body') }}</textarea>
           </div>

           <div class="form-submit">
             <button type="submit">投稿する</button>
           </div>
       </div>
</form>
</div>
@endsection
