<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link href="{{asset('css/WU/collection.css')}}" rel="stylesheet">
@extends('WU.layouts.common')
@section('content')
<div class="collection">
  <h1>collection</h1>
  <div class="album py-5 bg-light">
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            @if ($is_image)
            @foreach($img as $i)
           <img src="{{Storage::disk('local')->url('public/collection_images/'. $i->filename )}}" width=345px >
            <div class="card-body">
              <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
              <p class="card-text">{{ $i->title }}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <!-- <button type="button" class="btn btn-sm btn-outline-secondary">View</button> -->
                  <button type="button" class="btn btn-sm btn-outline-secondary">見る</button>
                  <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                  <button type="button" class="btn btn-sm btn-outline-secondary">編集</button>
                </div>
              </div>
            </div>
            @endforeach
            @endif
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
