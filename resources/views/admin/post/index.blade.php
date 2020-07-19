@extends('admin.common')
@section('content')
@if ($is_image)
<figure>
    <img src="/storage/post_images/">
    <figcaption>画像</figcaption>
</figure>
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
@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
@endsection
