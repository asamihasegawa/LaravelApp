<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>amu admin</title>
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="{{asset('css/assets/WU/common.css')}}" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/admin/home">amu admin</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/admin/top">top</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/news">top</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/about">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/collection">collection</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/stockist">stockist</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/online">online</a>
      </li>
    </ul>
  </div>
</nav>
<div class="contents">
@yield('content')
</div>
</body>
</html>
