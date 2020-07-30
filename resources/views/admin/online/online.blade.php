@extends('admin.common')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link href="{{asset('css/assets/WM/top.css')}}" rel="stylesheet">
<script src="{{ asset('js/app.js') }}"></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<h3>online</h3>
<div class="contents">
  @if (session('success'))
  <div class="alert alert-success">
      {{ session('success') }}
  </div>
  @endif
  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
      @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
      </ul>
  </div>
  @endif

  <form method="POST" action="/admin/online" enctype="multipart/form-data" >
      {{ csrf_field() }}
      <input type="file" name="photo">
  　　<br>
     @if($errors->has('goods_id'))
         <div class="error_msg">{{ $errors->first('goods_id') }}</div>
     @endif
     <input type="text" class="form" name="goods_id" placeholder="商品番号" value="{{ old('goods_id') }}">
     <br>

     @if($errors->has('name'))
         <div class="error_msg">{{ $errors->first('name') }}</div>
     @endif
     <input type="text" class="form" name="name" placeholder="商品名" value="{{ old('name') }}">
     <br>

        @if($errors->has('price'))
          <div class="error_msg">{{ $errors->first('price') }}</div>
      @endif
      <input type="text" class="form" name="price" placeholder="価格" value="{{ old('price') }}">
      <br>

      <input type="submit">

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

  @if ($is_image)
  @foreach($img as $i)
  <div class="album py-5 bg-light">
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="card-img-top" src="{{Storage::disk('local')->url('public/online_images/'. $i->filename )}}" width=100px>
            <div class="card-body">
              <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
              <p class="card-text">{{ $i->name }}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"> 詳細</button>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
  @endforeach
  @endif
</div>
@endsection
