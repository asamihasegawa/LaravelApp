@extends('admin.common')
@section('content')

    @if($item !== '')
        <div class="text">{{ $item->timestamp }}</div>

        <form action="/admin/about/{{$item->id}}" method="POST">
            {{ csrf_field() }}
            <div>
                <textarea class="form" name="body" placeholder="body">{{ $item->body }}</textarea>
            </div>
            <input type="hidden" name="_method" value="PUT">
            <input type="submit" class="create" value="変　更">
        </form>
    @endif

    <a href="/admin/about">一覧へ</a>
@endsection
