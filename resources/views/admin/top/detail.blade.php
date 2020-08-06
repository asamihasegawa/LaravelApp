@extends('admin.common')
<link href="{{asset('css/assets/WM/top.css')}}" rel="stylesheet">

@section('content')
@if($img !== '')
    <div class="headcopy">ファイル名</div><hr>
    <div class="text">{{ $img->filename }}</div><br>
    <div class="headcopy">登録日</div><hr>
    <div class="text">{{ $img->created_at }}</div><br>

    <form action="/admin/top/{{$img->id}}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="filename" value="1">
        <div class="">
         <input type="text" class="form" name="filename" placeholder="" value="{{ $img->filename }}">
        </div>
        <div class="">
         <input type="text" class="form" name="created_at" placeholder="" value="{{ $img->created_at }}">
        </div>
        <input type="hidden" name="_method" value="PUT">
        <input type="submit" class="create" value="変　更">
    </form>
@endif

<a href="/admin/top">一覧へ</a>
@endsection
