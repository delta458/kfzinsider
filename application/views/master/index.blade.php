<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>KfzInsider: Slogan</title>
        <meta name="viewport" content="width=device-width">
        {{ HTML::style('css/bootstrap.css') }}
        {{ HTML::style('css/bootstrap.min.css') }}
         {{ HTML::style('css/custom.css') }}
    </head>
    <body>
        <div class="container-fluid">
            <div class="page-header">
                <h1>Kfz-Insider</h1>
                <h3>Qualität und Fairness beim Kfz-Service!</h3>
            </div>
            <div class="navbar">
                <div class="navbar-inner">
                    <ul class="nav nav-pills">
                        <li>{{ HTML::clever_link('home','Home') }}</li>
                       @if(!Auth::check())
                        <li>{{ HTML::clever_link('register','Register') }}</li>
                            <li>{{ HTML::clever_link('login','Login') }}</li>
                            @else
                            @if($isAdmin)
                                    <li>{{ HTML::clever_link('settings','Einstellungen') }}</li>
                            @endif
                                <li>{{ HTML::clever_link('logout','Logout') }}</li>
                        @endif
                    </ul>
                </div>
            </div> 
            <div class="well" >
                @if(Session::has('message'))
                <p id='message'> {{ Session::get('message') }}</p>
                @endif

                @yield('content')
            </div>

        </div>
    </body>
</html>
