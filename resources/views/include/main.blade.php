<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>

    @include('include.nav')

    <div id="app">
        @yield('information')
    </div>
    
    @include('include.footer')

    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>