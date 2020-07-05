<DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>@yield('title')amu.net</title>
<script src="{{ asset('js/app.js') }}"></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{asset('css/assets/WU/common.css')}}" rel="stylesheet">
<link href="{{asset('css/assets/WU/online.css')}}" rel="stylesheet">
</head>
<body>
<div class="header">
  @component('WU.layouts.header')
  @endcomponent
</div>
<div class="loginbar">
  <ul>
    <li><a href="/login">login</a></li>
    <li><a href="/register">register</a></li>
  </ul>
</div>
<div class="online_contents">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <a href="#">
          <img class="card-img-top" src="{{asset('images/IMG_2220.JPG')}}" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">タイトル</p>
            <p class="card-text">プライス</p>
          </div>
          </a>
        </div>
　　　　</div>
      <div class="col-md-4">
       <div class="card mb-4 shadow-sm">
        <a href="#">
         <img class="card-img-top" src="{{asset('images/IMG_2220.JPG')}}" alt="Card image cap">
          <div class="card-body">
           <p class="card-text">タイトル</p>
           <p class="card-text">プライス</p>
          </div>
       </a>
       </div>
　　　 </div>
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <a href="#">
          <img class="card-img-top" src="{{asset('images/IMG_2220.JPG')}}" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">タイトル</p>
            <p class="card-text">プライス</p>
          </div>
          </a>
        </div>
　　　　</div>
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <a href="#">
          <img class="card-img-top" src="{{asset('images/IMG_2220.JPG')}}" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">タイトル</p>
            <p class="card-text">プライス</p>
          </div>
          </a>
        </div>
　　　　</div>
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <a href="#">
          <img class="card-img-top" src="{{asset('images/IMG_2220.JPG')}}" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">タイトル</p>
            <p class="card-text">プライス</p>
          </div>
          </a>
        </div>
　　　　</div>
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <a href="#">
          <img class="card-img-top" src="{{asset('images/IMG_2220.JPG')}}" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">タイトル</p>
            <p class="card-text">プライス</p>
          </div>
          </a>
        </div>
　　　　</div>
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <a href="#">
          <img class="card-img-top" src="{{asset('images/IMG_2220.JPG')}}" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">タイトル</p>
            <p class="card-text">プライス</p>
          </div>
          </a>
        </div>
　　　　</div>
       <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
         <a href="#">
         <img class="card-img-top" src="{{asset('images/IMG_2220.JPG')}}" alt="Card image cap">
          <div class="card-body">
           <p class="card-text">タイトル</p>
           <p class="card-text">プライス</p>
         </div>
        </a>
       </div>
　　　 </div>
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <a href="#">
          <img class="card-img-top" src="{{asset('images/IMG_2220.JPG')}}" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">タイトル</p>
            <p class="card-text">プライス</p>
          </div>
          </a>
        </div>
　　　　</div>
      </div>
    </div>
  </div>
  </div>
</div>
<div class="footer">
  @component('WU.layouts.footer')
  @endcomponent
</div>
</html>
