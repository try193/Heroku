<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>@yield('title')</title>
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
        
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/admin.css') }}" rel="stylesheet">
    </head>
    
    <body style="background-color:#ccff99">
        <div id="app">
            <nav class="navbar navbar-light md-2" style="background-color:#fc3">
                <span class="navbar-text"><b>マイ家計簿</b></span>
                <button class="navbar-toggler" type="button"
                    data-toggle="collapse"
                    data-target="#navmenu1"
                    aria-controls="navmenu1"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navmenu1">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" href="#">収支入力</a>
                        <a class="nav-item nav-link" href="#">収支管理</a>
                    </div>
                </div>
            </nav>
            
            <main class="p-4">
                @yield('content')
            </main>
            
        </div>
    </body>
</html>