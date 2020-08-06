@extends('admin.common')
@section('content')
@if($img !== '')

    <div class="headcopy">filename</div><hr>
    <div class="text">{{ $img->created_at }}</div><br>

    <form action="/admin/about/{{$img->id}}" method="POST">
        {{ csrf_field() }}
        <div>
            <textarea class="form" name="body" placeholder="">{{ $img->body }}</textarea>
        </div>
        <input type="hidden" name="_method" value="PUT">
        <input type="submit" class="create" value="変　更">
    </form>
@endif

<a href="/admin/about">一覧へ</a>
@endsection
