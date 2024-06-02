<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{asset('style/style.css')}}">
    <title>LitCove | @yield('title')</title>
</head>
<body class=" w-screen flex overflow-hidden font-poppins">
    @include('partials.sidebaradmin')
    @yield('body')

    <script src="{{asset('src/index.js')}}"></script>
</body>
</html>