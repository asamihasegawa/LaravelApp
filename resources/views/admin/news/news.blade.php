@extends('admin.common')
@section('content')
<link href="{{asset('css/assets/WM/top.css')}}" rel="stylesheet">
<div class="top">news</div>
<form action="/admin/news" method="post">
       {{ csrf_field() }}

       <input type="hidden" name="news_id" value="1">
       @if($errors->has('title'))
           <div class="error_msg">{{ $error->first('title')}}</div>
       @endif
       <div class="">
            <textarea class="form" name="title" placeholder="タイトル">{{old('title')}}</textarea>
       </div>
       @if($errors->has('body'))
           <div class="error_msg">{{ $error->first('body')}}</div>
       @endif
       <div class="">
            <textarea class="form" name="body" placeholder="本文">{{old('body')}}</textarea>
       </div>
       <input type="submit" class="create" value="投　稿">
</form>

@if(count($items) > 0)
   @foreach($items as $item)
     <div class="alert lalert-primary" role="alert">
        <p>{{ $item->create_at }}</p>
        <a href="/admin/news/{{ $item->id }}" class="alert-link">{{ $item->title }}</a>
        <form action="/admin/news/{{ $item->id }}" method="post">
          {{ csrf_field() }}
          <input type="hidden" name="_method" value="DELETE">
          <input type="submit" name="delete" value="削　除">
        </form>
     </div>
   @endforeach
   @else
     <div class="">投稿記事がありません</div>
   @endif
@endsection
