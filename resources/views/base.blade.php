<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    <title>@yield('title')</title>
    <script src="{{ mix('/js/app.js') }}"></script>
</head>
<body class="bg-gray-100">
    <div id="app">
    <x-navigation></x-navigation>
    @yield('content')
    <x-footer></x-footer>
    </div>
</body>
</html>