@extends('admin.common')
@section('content')
@if ($is_image)
<figure>
    <img src="{{Storage::disk('local')->url('public/post_images/123.jpeg')}}">
    <figcaption>image</figcaption>
</figure>
@endif

@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<form method="POST" action="/admin/post" enctype="multipart/form-data" >
    {{ csrf_field() }}
    <input type="file" name="photo">
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
