<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/app.css') }}" rel="stylesheet">
    <title>Document</title>
    @livewireStyles
</head>

<body>


    @yield('content')



    <script src="{{ asset('asset/js/bootstrap.bundle.min.js') }}"></script>
    @livewireScripts
</body>

</html>
