<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('dist/assets/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/assets/css/main/app-dark.css') }}">
    <link rel="shortcut icon" href="{{ asset('dist/assets/images/logo/favicon.svg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('dist/assets/images/logo/favicon.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('dist/assets/extensions/simple-datatables/style.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/assets/css/pages/simple-datatables.css') }}">
    <script src="https://kit.fontawesome.com/e439ecdff4.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="app">
        @include('template.sidebar')
        @yield('container')
    </div>
    <script src="{{ asset('dist/assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('dist/assets/js/app.js') }}"></script>
    <script src="{{ asset('dist/assets/extensions/simple-datatables/umd/simple-datatables.js') }}"></script>
    <script src="{{ asset('dist/assets/js/pages/simple-datatables.js') }}"></script>

</body>



</html>
                                                                                                                                       