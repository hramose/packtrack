<!doctype html>
<html lang="nl" @yield('html-tag')>
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Pack And Track ')</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('meta')

    <!-- stylesheets -->
    {{ HTML::style('//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css') }}
    {{ HTML::style('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css') }}
    @yield('styles')
    {{ HTML::style('assets/css/main-old.css') }}

    <script>
        var URL = {
            'base' : '{{ URL::to('/') }}',
            'current' : '{{ URL::current() }}',
            'full' : '{{ URL::full() }}'
        };
    </script>
</head>
<body>
    <header>
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ URL::to('/') }}">
                    {{ HTML::image('assets/img/logo.png', 'Pack And Track') }}
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav pull-right">
                    <li class="{{ set_active('/') }}">
                        <a href="{{ URL::to('/') }}">Home</a>
                    </li>
                    <li class="{{ set_active('about') }}">
                        {{ link_to_action('HomeController@about', 'About') }}
                    </li>
                    <li class="{{ set_active('contact') }}">
                        <a href="contact">Contact</a>
                    </li>
                    <li class="{{ set_active('dashboard') }}">
                        <a href="#contact">Packages</a>
                    </li>
                    <li class="{{ set_active('register') }}{{ set_active('login') }}">
                        <a href="login">Login</a>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
   </header>

    <div id="wrap"><div id="main">
    <div class="content">
        <div class="container">


            @if(Session::get('success'))
            <div class="alert alert-success fade in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <strong>Success:</strong> {{ Session::get('success') }}
            </div>
            @endif

            @if(Session::get('errors'))
            <div class="alert alert-danger fade in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <ul>
                    @foreach ($errors->all('<li>:message</li>') as $error)
                    {{ $error }}
                    @endforeach
                </ul>
            </div>
            @endif
            
            @yield('content')
        </div>
    </div>
        </div></div>
    <footer>
        <div id="footerbutton"><div><img src="/assets/img/up.gif" width="11" height="8" class="left"><img src="/assets/img/up.gif" width="11" height="8" class="right"></div></div>
        <div id="footercontent">
            <div id="footercontenttext">
                bla bla
            </div>
        </div>
        <!--<div class="container">
                <div class="col-md-4">

                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    Quick links
                    <ul>
                        <li><a href="#">Github</a></li>
                    </ul>
                </div>

        </div>-->
    </footer>
    <!-- scripts -->
    {{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js') }}
    {{ HTML::script('//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/js/bootstrap.min.js') }}
    @yield('scripts')
    {{ HTML::script('assets/js/main.js') }}

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-47973073-1', 'packandtrack.be');
        ga('send', 'pageview');
    </script>

</body>
</html>