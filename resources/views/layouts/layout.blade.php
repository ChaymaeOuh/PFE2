<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3392ac5187.js" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
    @yield('style')
</head>

<body>

    <div>
        @yield('header')
    </div>

    <div>
        @yield('slider')
    </div>

    <div>
        @yield('footer')
    </div>
</body>

</html>
