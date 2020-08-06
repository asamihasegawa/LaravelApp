@extends('admin.common')
@section('content')
<h3>top</h3>
<br>
<br>
<form method="POST" action="/admin/top" enctype="multipart/form-data" >
    {{ csrf_field() }}
    <input type="file" name="photo">
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
<br>
<br>

<div class="">
    <div class="row">
      @foreach($img as $i)
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
         <img src="{{Storage::disk('local')->url('public/top_images/'. $i->filename )}}" width=100% >
          <div class="card-body">
            <p class="card-text">{{ $i->filename }}</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary" onclick="location.href='/admin/top/{{ $i->id }}'" >編集</button>

                <form action="/admin/top/{{ $i->id }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE">
                <input type="submit" class="btn btn-sm btn-outline-secondary" value="削除">
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
@endsection
