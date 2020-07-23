@extends('admin.common')
@section('content')
<h3>top</h3>
@if ($is_image)
<figure>
     <img src="{{Storage::disk('local')->url('public/top_images/2020-07-23.jpg' )}}" width=500px >
    <figcaption>image</figcaption>
</figure>
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


<form method="POST" action="/admin/top" enctype="multipart/form-data" >
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
