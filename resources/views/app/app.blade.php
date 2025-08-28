<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <style>

    </style>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    @yield('css')
</head>

<body>

    <section class="header">
        @include('app.header') {{-- Blade Directives --}}
        @yield('page-title')

    </section>
    {{-- content  --}}
    @yield('content')


    {{-- footer  --}}
    @include('app.footer')

    @yield('javascripts')
</body>

</html>
