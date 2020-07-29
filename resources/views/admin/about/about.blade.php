@extends('admin.common')
@section('content')
<link href="{{asset('css/assets/WM/top.css')}}" rel="stylesheet">
<h3>about</h3>
@if ($is_image)
@foreach($img as $i)
<figure>
     <img src="{{Storage::disk('local')->url('public/top_images/'. $i->filename )}}" width=500px >
    <figcaption>{{ $i->filename }}</figcaption>
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

<form method="POST" action="/admin/about" enctype="multipart/form-data" >
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


<form action="/admin/about" method="post">
        {{ csrf_field() }}

        <!-- value仮入れ(Userモデルとリレーションするのに必要) -->
        <input type="hidden" name="user_id" value="1">
        @if($errors->has('body'))
            <div class="error_msg">{{ $errors->first('body') }}</div>
        @endif
        <div>
            <textarea class="form" name="body" placeholder="メッセージ">{{ old('body') }}</textarea>
        </div>
        <input type="submit" class="create" value="投  稿">
    </form>

    @if(count($items) > 0)
        @foreach($items as $item)
            <div class="alert alert-primary" role="alert">
                <a href="/admin/about/{{ $item->id }}" class="alert-link">{{ $item->body }}</a>
                <form action="/admin/about/{{ $item->id }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE">
                <input type="submit" class="delete" value="削除">
                </form>
            </div>
        @endforeach
    @else
        <div>投稿記事がありません</div>
    @endif
@endsection
