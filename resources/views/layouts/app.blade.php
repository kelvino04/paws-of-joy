<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Paws of joy')</title>

    @vite(['resources/css/app.css', 'resources/js/app.jsx'])

    <style>
        #page-content {
            visibility: hidden;
        }
    </style>
</head>

<body>

    <div id="LoadingScreen"></div>

    <div id="page-content">

        <div id="Header"></div>

        @yield('content')

        <div id="Footer"></div>

    </div>

</body>

</html>
