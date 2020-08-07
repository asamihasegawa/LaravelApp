@extends('admin.common')
@section('content')
<link href="{{asset('css/assets/WM/collection.css')}}" rel="stylesheet">
<h2>collection</h2>
<br>
  <form method="POST" action="/admin/collection" enctype="multipart/form-data" >
      {{ csrf_field() }}
      <div class="file">
          <input class="radius-pixel-30" type="file" name="photo">
      </div>
  　　<br>
     <br>

     @if($errors->has('title'))
         <div class="error_msg">{{ $errors->first('title') }}</div>
     @endif
     <input type="text" class="form" name="title" placeholder="title" value="{{ old('title') }}">
     <br>
     <br>
      @if($errors->has('body'))
          <div class="error_msg">{{ $errors->first('body') }}</div>
      @endif
      <textarea class="form" name="body" placeholder="テキスト">{{ old('body') }}</textarea>
      <br>
      <br>

      <input class="radius-pixel-30"　type="submit" value="登　録">

  </form>
  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
      @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
      </ul>
  </div>
  @endif
  <br>
  <div class="">
      <div class="row">
        @foreach($img as $i)
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
           <img src="{{Storage::disk('local')->url('public/collection_images/'. $i->filename )}}" width=100% >
            <div class="card-body">
              <p class="card-text"　>{{ $i->title }}</p>
              <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" onclick="location.href='/admin/collection/{{ $i->id }}'" >編集</button>

                  <form action="/admin/collection/{{ $i->id }}" method="POST">
                  {{ csrf_field() }}
                  <input type="hidden" name="_method" value="DELETE">
                  <input type="submit" class="btn btn-sm btn-outline-secondary" value="削除">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
       @endforeach
      </div>
    </div>
@endsection
