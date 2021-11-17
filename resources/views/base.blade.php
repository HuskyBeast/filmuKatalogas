<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    <title>@yield('title')</title>
</head>
<body>
    <x-navigation loggedIn="0"></x-navigation>
    @yield('content')
    <x-footer></x-footer>
</body>
</html>