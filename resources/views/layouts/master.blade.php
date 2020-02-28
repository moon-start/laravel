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
  <main class="py-4">
    <div class="container">
      @yield('content')
    </div>
  </main>
  @section('foot')
    @include('partials.foot')
  @show
</body>
</html>