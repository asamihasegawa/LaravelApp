@extends('admin.common')
<link href="{{asset('css/assets/WM/top.css')}}" rel="stylesheet">

@section('content')
@if($img !== '')
    <div class="headcopy">title</div><hr>
    <div class="text">{{ $img->title }}</div><br>
    <div class="headcopy">テキスト</div><hr>
    <div class="text">{{ $img->body }}</div><br>
    <div class="headcopy">filename</div><hr>
    <div class="text">{{ $img->filename }}</div><br>

    <form action="/admin/collection/{{$img->id}}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="title" value="1">
        <div class="">
         <input type="text" class="form" name="title" placeholder="" value="{{ $img->title }}">
        </div>
        <div>
            <textarea class="form" name="body" placeholder="">{{ $img->body }}</textarea>
        </div>
        <div class="">
         <input type="text" class="form" name="filename" placeholder="" value="{{ $img->filename }}">
        </div>
        <input type="hidden" name="_method" value="PUT">
        <input type="submit" class="create" value="変　更">
    </form>
@endif

<a href="/admin/collection">一覧へ</a>
@endsection
