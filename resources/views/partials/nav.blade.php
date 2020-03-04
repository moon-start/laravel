<div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                

                <!-- 修改 class="navbar-brand" -->
                <a href="{{ url('/') }}" class="navbar-brand">
                專案站台
                </a>    


                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                            <!-- 新增 自己的 -->
                            <li class="nav-item active">  
                                <a href="{{ action('QBController@index') }}" class="nav-link">
                                消費列表
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ action('QBController@new')}}" class="nav-link">
                                新增消費
                                </a>
                            </li>
                           
                    </ul>



                    <!-- nav 藥丸主題 -->
                    <!-- <ul class="nav nav-pills"> -->

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                            <!-- 登入後的 漢堡選單?? -->
                            <!-- <div class="dropdown">
                                <a class="dropdown-toggle" id="OK" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown button
                                </button>
                                <div class="dropdown-menu" aria-labelledby="OK">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div> -->
                            <li class="nav-item dropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        
        <main class="py-4">
            @yield('content')
        </main> 
    </div>


<!-- 原始的 nav.blade.php 內容-->
<!-- <nav class="navbar navbar-expand-lg navbar-light navbar-default">
    <div class="container">
        <a href="{{ url('/') }}" class="navbar-brand">
        專案站台
        </a>
        <ul class="navbar-nav ml-auto mt-4 mt-lg-0">
            <li class="nav-item active">  
                <a href="{{ action('QBController@index') }}" class="nav-link">
                消費列表
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ action('QBController@new')}}" class="nav-link">
                新增消費
                </a>
            </li>
        </ul>
    </div>
</nav> -->

