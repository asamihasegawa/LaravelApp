@extends('admin.common')
@section('content')

{!! Form::open(['route' => 'upload', 'method' => 'post','files' => true]) !!}
    <div class="form-group">
        {!! Form::label('file', '画像投稿', ['class' => 'control-label']) !!}
        {!! Form::file('file') !!}
    </div>
    <div class="form-group text-center">
        {!! Form::submit('投稿', ['class' => 'btn btn-primary my-2']) !!}
    </div>
{!! Form::close() !!}

@foreach($posts as $post)
<div class="card-header text-center">
        <img src= {{ Storage::disk('local')->url($post->image_file_name) }} alt="" width=250px height=250px></a>
    </div>
    <div class="alert alert-primary" role="alert">
            {{ $post->image_file_name }}<br>
    </div>
    <form action="/admin/top/{{ $post->id }}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="DELETE">
    <input type="submit" class="delete" value="削除">
    </form>
@endforeach
@endsection
