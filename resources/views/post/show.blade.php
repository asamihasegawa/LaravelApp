@extends('admin.common')
@section('title', '詳細記事')

@section('content')
    @section('maincopy', '詳細記事')

    @if($item !== '')
        <div class="headcopy">name</div><hr>
        <div class="text">{{ $item->name }}</div>
        <div class="headcopy">Tel</div><hr>
        <div class="text">{{ $item->tel }}</div>
        <div class="headcopy">address</div><hr>
        <div class="text">{{ $item->address }}</div><br>

        <form action="/admin/stockist/{{$item->id}}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="user_id" value="1">
            <div class="">
             <input type="text" class="form" name="name" placeholder="" value="{{ $item->name }}">
            </div>
            <div class="">
              <input type="text" class="form" name="tel" placeholder="" value="{{ $item->tel }}">
            </div>
            <div>
                <textarea class="form" name="address" placeholder="">{{ $item->address }}</textarea>
            </div>
            <input type="hidden" name="_method" value="PUT">
            <input type="submit" class="create" value="変　更">
        </form>
    @endif

    <a href="/admin/stockist">一覧へ</a>
@endsection
