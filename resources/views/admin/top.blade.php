@extends('admin.common')
@section('content')
<!-- エラーメッセージ。なければ表示しない -->
@if ($errors->any())
<ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<!-- フォーム -->
<form action="/admin/top" method="POST" enctype="multipart/form-data">
    @csrf

    <label for="photo">画像ファイル:</label>
    <input type="file" class="form-control" name="file">
    <br>
    <input type="submit">
</form>
<br>
<a href="/upload">画像のアップロードに戻る</a>
   <br>
   @foreach ($user_images as $user_image)
       <img src="{{ asset('storage/' . $user_image['file_name']) }}">
       <br>
   @endforeach
@endsection
