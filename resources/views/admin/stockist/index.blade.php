@extends('admin.common')
<link href="{{asset('css/assets/WM/top.css')}}" rel="stylesheet">

@section('content')
    @section('maincopy', '投稿してください')

    <br>
    <br>
    <form action="/admin/stockist" method="post">
        {{ csrf_field() }}


        <input type="hidden" name="stockist_posts_id" value="1">
        @if($errors->has('shop_name'))
            <div class="error_msg">{{ $errors->first('shop_name') }}</div>
        @endif
        <input type="text" class="form" name="shop_name" placeholder="shop_name" value="{{ old('shop_name') }}">
        <br>
        @if($errors->has('tel'))
            <div class="error_msg">{{ $errors->first('shop_name') }}</div>
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

    @if(count($items) > 0)
        @foreach($items as $item)
            <div class="alert alert-primary" role="alert">
                <a href="/admin/stockist/{{ $item->id }}" class="alert-link">{{ $item->shop_name }}</a>
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
