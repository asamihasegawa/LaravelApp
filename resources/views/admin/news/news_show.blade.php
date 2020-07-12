@extends('admin.common')
@section('content')

    @if($item !== '')
        <div class="">news</div>

        <form action="/admin/news/{{$item->id}}" method="POST">
            {{ csrf_field() }}
            <div>
                <p>タイトル</p>
                <textarea class="form" name="title" placeholder="title">{{ $item->title }}</textarea>
            </div>
            <div>
                <p>本文</p>
                <textarea class="form" name="body" placeholder="body">{{ $item->body }}</textarea>
            </div>
            <input type="hidden" name="_method" value="PUT">
            <input type="submit" class="create" value="変　更">
        </form>
    @endif

    <a href="/admin/news">一覧へ</a>
@endsection
