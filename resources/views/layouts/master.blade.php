<!DOCTYPE html>
<html>
<head>
  <title>@yield('title')</title>
  @section('head')
    @include('partials.head')
  @show

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>

<body style="cursor: url(https://i.imgur.com/7PzAN2U.png), auto;">
  @include('partials.nav')
  
  <!-- <main class="py-4"> -->
  <!-- <div class="container"> -->
  <!-- 這是載入 blade.php主體
  因為後面會用到 不需要再載入 -->
      <!-- yield('content') -->
    <!-- </div> -->
  <!-- </main> -->
  @section('foot')
    @include('partials.foot')
  @show
</body>
</html>