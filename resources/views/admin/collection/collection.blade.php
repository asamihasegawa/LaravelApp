@extends('admin.common')
@section('content')
<h3>collection</h3>
<link href="{{asset('css/assets/WM/top.css')}}" rel="stylesheet">
<div class="">
  @if ($is_image)
  @foreach($img as $i)
  <figure>
       <img src="{{Storage::disk('local')->url('public/collection_images/'. $i->filename )}}" width=500px >
      <figcaption>{{ $i->filename }}</figcaption>
      {{ $i->title }}<br>
      {{ $i->body }}<br>
  </figure>
  @endforeach
  @endif


  @if (session('success'))
  <div class="alert alert-success">
      {{ session('success') }}
  </div>
  @endif
  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
      @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
      </ul>
  </div>
  @endif


  <form method="POST" action="/admin/collection" enctype="multipart/form-data" >
      {{ csrf_field() }}
      <input type="file" name="photo">
  　　<br>

     @if($errors->has('title'))
         <div class="error_msg">{{ $errors->first('title') }}</div>
     @endif
     <input type="text" class="form" name="title" placeholder="title" value="{{ old('title') }}">
     <br>
      @if($errors->has('body'))
          <div class="error_msg">{{ $errors->first('body') }}</div>
      @endif
      <textarea class="form" name="body" placeholder="テキスト">{{ old('body') }}</textarea>
      <br>

      <input type="submit">

  </form>
  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
      @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
      </ul>
  </div>
  @endif

</div>
@endsection
