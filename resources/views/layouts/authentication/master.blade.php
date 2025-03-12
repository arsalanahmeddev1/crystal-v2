<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ env('APP_NAME') }} - @yield('title')</title>
    @include('layouts.meta')
    @include('layouts.css')
    @yield('css')
</head>

<body>
    <!-- login page start-->
    @yield('content')
    <!-- latest jquery-->
    @include('layouts.script')
</body>

</html>
