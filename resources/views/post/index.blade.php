@extends('admin.common')
<link href="{{asset('css/assets/WM/top.css')}}" rel="stylesheet">

@section('content')
    @section('maincopy', '投稿してください')

    <br>
    <br>
    <form action="/admin/stockist" method="post">
        {{ csrf_field() }}

        <!-- value仮入れ(Userモデルとリレーションするのに必要) -->
        <input type="hidden" name="user_id" value="1">
        @if($errors->has('name'))
            <div class="error_msg">{{ $errors->first('name') }}</div>
        @endif
        <input type="text" class="form" name="name" placeholder="name" value="{{ old('name') }}">
        <br>
        @if($errors->has('tel'))
            <div class="error_msg">{{ $errors->first('name') }}</div>
        @endif
        <input type="text" class="form" name="tel" placeholder="tel" value="{{ old('tel') }}">
        <br>
        @if($errors->has('address'))
            <div class="error_msg">{{ $errors->first('address') }}</div>
        @endif
        <div>
            <textarea class="form" name="address" placeholder="address">{{ old('address') }}</textarea>
        </div>
        <input type="submit" class="create" value="投  稿">
    </form>

    <!-- 記事描画部分 -->
    @if(count($items) > 0)
        @foreach($items as $item)
            <div class="alert alert-primary" role="alert">
                <a href="/admin/stockist/{{ $item->id }}" class="alert-link">{{ $item->title }}</a>
                <form action="/admin/stockist/{{ $item->id }}" method="POST">
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
