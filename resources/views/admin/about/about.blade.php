@extends('admin.common')
@section('content')
<link href="{{asset('css/assets/WM/top.css')}}" rel="stylesheet">
<h3>about</h3>
@if ($is_image)
@foreach($img as $i)
<figure>
     <img src="{{Storage::disk('local')->url('public/about_images/'. $i->filename )}}" width=500px >
    <figcaption>{{ $i->filename }}</figcaption>
    {{ $i->body }}<br>
</figure>
<form action="/admin/about" method="DELETE">
{{ csrf_field() }}
<input type="hidden" name="_method" value="DELETE">
<input type="submit" class="delete" value="削除">
</form>
@endforeach
@endif
<br>
<br>
<br>

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

<form method="POST" action="/admin/about" enctype="multipart/form-data" >
    {{ csrf_field() }}
    <input type="file" name="photo">
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
@endsection
