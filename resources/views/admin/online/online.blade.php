@extends('admin.common')
@section('content')
<link href="{{asset('css/assets/WM/top.css')}}" rel="stylesheet">
<h3>online</h3>
<div class="contents">
  <div class="album py-5 bg-light">
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="card-img-top" src="{{Storage::disk('local')->url('public/online_images/2020-07-22.jpg' )}}" width=100px>
            <div class="card-body">
              <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
              <p class="card-text">商品名</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">編集</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="card-img-top" src="{{Storage::disk('local')->url('public/online_images/2020-07-22.jpg' )}}" width=100px>
            <div class="card-body">
              <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
              <p class="card-text">商品名</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">編集</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <img class="card-img-top" src="{{Storage::disk('local')->url('public/online_images/2020-07-22.jpg' )}}" width=100px>
          <div class="card-body">
            <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
            <p class="card-text">商品名</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">編集</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
       <div class="card mb-4 shadow-sm">
        <img class="card-img-top" src="{{Storage::disk('local')->url('public/online_images/2020-07-22.jpg' )}}" width=100px>
        <div class="card-body">
          <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
          <p class="card-text">商品名</p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
              <button type="button" class="btn btn-sm btn-outline-secondary">編集</button>
            </div>
          </div>
         </div>
       </div>
     </div>
     <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <img class="card-img-top" src="{{Storage::disk('local')->url('public/online_images/2020-07-22.jpg' )}}" width=100px>
         <div class="card-body">
        <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
          <p class="card-text">商品名</p>
          <div class="d-flex justify-content-between align-items-center">
           <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-secondary">編集</button>
           </div>
          </div>
         </div>
      </div>
     </div>
     <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <img class="card-img-top" src="{{Storage::disk('local')->url('public/online_images/2020-07-22.jpg' )}}" width=100px>
         <div class="card-body">
        <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
          <p class="card-text">商品名</p>
          <div class="d-flex justify-content-between align-items-center">
           <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-secondary">編集</button>
           </div>
          </div>
         </div>
      </div>
     </div>
    </div>
  </div>
</div>
@endsection
