@extends('admin.common')
@section('content')
<p>タイトル：{{ $title }}</p>
<p>詳細内容：{{ $content }}</p>
<p>ユーザID：{{ $user_id }}</p>
@endsection
