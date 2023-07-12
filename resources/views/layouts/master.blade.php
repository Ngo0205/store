<html>
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    <link rel="stylesheet" href="{{asset('html/fontawesome-free-6.4.0/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('html/đề tài/main.css')}}">
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('html\fontawesome-free-6.4.0\css\style.css')}}">
    @yield('css')
</head>
<body>
@include('components.header')
@yield('content')
@include('components.footer')

<script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
{{--<script src="{{asset('/js/add-to-cart.js')}}" type="text/javascript"></script>--}}
</script>
@yield('js')
</body>
</html>
