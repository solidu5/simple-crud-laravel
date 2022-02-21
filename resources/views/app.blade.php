<html>
    <head>
        <title>@yield('title')</title>
    </head>

    <body>
        @include('header')

        <div style="margin-top: 20px; margin-bottom: 20px">
            @yield('content')
        </div>

        @include("footer")
    </body>
</html>