<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;600;700&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,800;1,600&display=swap" rel="stylesheet"> 

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <header id="site_header">
            @include('partials.header')
        </header>
        <!-- /#site_header -->
        <main id="site_main">
            @yield('content')
        </main>
        <!-- /#site_footer -->
        <footer id="site_footer">
            @include('partials.footer')
        </footer>
        <!-- /#site_footer -->
    </body>
</html>
