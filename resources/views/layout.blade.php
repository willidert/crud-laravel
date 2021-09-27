<!doctype html>
<html lang="{{str_replace('_', '-', app()->getLocale())}}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ url('css/app.css') }}" rel="stylesheet">

    <title>Artigos</title>
</head>

<body>

    <h1 class="container mx-auto font-serif thin text-9xl">
        @yield('title')
    </h1>

    <div class="container mx-auto">
        @yield('content')
    </div>

</body>

</html>
