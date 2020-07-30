@extends('admin.common')
@section('content')
<h1>test page</h1>
@if ($is_image)
@foreach($img as $i)
<figure>
     <img src="{{Storage::disk('local')->url('public/post_images/'. $i->filename )}}" width=500px >
    <figcaption>{{ $i->filename }}</figcaption>
    {{ $i->title }}<br>
    {{ $i->content }}<br>
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


<form method="POST" action="/admin/post" enctype="multipart/form-data" >
    {{ csrf_field() }}
    <input type="file" name="photo">

    @if($errors->has('title'))
        <div class="error_msg">{{ $errors->first('title') }}</div>
    @endif
    <input type="text" class="form" name="title" placeholder="title" value="{{ old('title') }}">
    <br>

    @if($errors->has('content'))
        <div class="error_msg">{{ $errors->first('content') }}</div>
    @endif
    <input type="text" class="form" name="content" placeholder="content" value="{{ old('content') }}">
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
@endsection
