<!DOCTYPE html>
<html lang="fa" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title> Task Project </title>

        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">

    </head>
    <body>

        <header class="bg-primary text-center p-3">
            <strong> Tasks </strong>
        </header>

        <main class="p-3 text-right" dir="rtl">
            @include('fragments.flash')
            @yield('content')
        </main>

        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
