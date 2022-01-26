<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
     <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css') }}">
     <link rel="stylesheet" href="{{ asset('css/styleRegistration.css') }}">
</head>

<body>
     <div id="app">
        @yield('content')
    </div>
</body>

</html>

