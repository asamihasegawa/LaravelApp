@extends('layouts.app')
@section('title', '詳細記事')

@section('content')
    @section('maincopy', '詳細記事')

    @if($item !== '')
        <div class="headcopy">name</div><hr>
        <div class="text">{{ $item->name }}</div>
        <div class="headcopy">Tel</div><hr>
        <div class="text">{{ $item->tel }}</div>
        <div class="headcopy">Message</div><hr>
        <div class="text">{{ $item->message }}</div>
    @endif

    <a href="/admin/stockist"><img src="{{ asset('img/edit.svg') }}" class="add" alt="topへ"></a>
@endsection
