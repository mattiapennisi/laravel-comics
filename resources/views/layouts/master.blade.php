<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('headTitle')
    </title>
</head>

<body>
    @include('partials.header')

    @yield('homeContent')

    @include('partials.footer')
</body>

</html>