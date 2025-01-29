<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/style.css')}}">
    @yield('css')
    <title>{{config('app.name', 'jop portal')}}</title>
</head>

<body>
    @include('layouts.navbar')




    @yield('centent')


    @include('layouts.footer')


    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    @yield('script')
</body>

</html>