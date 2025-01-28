<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @yield('css')
    <title>{{config('app.name', 'jop portal')}}</title>
</head>

<body>
    @include('user.layouts.navbar')




    @yield('centent')


    @include('user.layouts.footer')
    @yield('script')
</body>

</html>