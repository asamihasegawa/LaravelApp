<DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>@yield('title')amu.net</title>
<script src="{{ asset('js/app.js') }}"></script>
<link href="{{asset('css/assets/WU/common.css')}}" rel="stylesheet">
</head>
<body>
<div class="container">
  @component('WU.layouts.header')
  @endcomponent
  @section('submenu')
  @component('WU.layouts.submenu')
  @endcomponent
  <div class="content">
    @yield('content')
  </div>
  @component('WU.layouts.footer')
  @endcomponent
</div>
</body>
</html>
