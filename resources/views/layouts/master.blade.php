<!DOCTYPE html>
<html>
<head>
  <title>@yield('title')</title>
  @section('head')
    @include('partials.head')
  @show
</head>
<body style="cursor: url("https://i.imgur.com/7PzAN2U.png"), auto;">
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