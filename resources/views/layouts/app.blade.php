<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nàng Sen Spa Center</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="copyright" content="NangSen">
    <meta property="og:locale" content="vi_VN">
    <meta property="og:title" content="Nàng Sen Spa Center">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="Nang Sen">
    <script src="https://cdn.tailwindcss.com"></script>
{{--    @vite('resources/css/app.css')--}}
</head>
<body class="antialiased">
    @include('components.header')

    @yield('content')

    @include('components.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>
</html>
