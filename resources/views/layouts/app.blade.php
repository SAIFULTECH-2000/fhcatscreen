<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <script type="text/javascript" src="{{ asset('js/jquery-1.10.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>

<body>

    @yield('content')
    <div id="myFooter" class="d-none d-md-block justify-content-center align-content-center">
        <div><small>Developed by IPPerform and FSKM</small></div>
        <div class="p-1">
            <img src="{{asset('img/logo-90x90-i-pperform.png')}}" height="90" alt="" />
            <img src="{{asset('img/logo-90x360-uitm.png')}}" height="90" alt="" />
        </div>
    </div>
    @yield('javascript')
</body>

</html>
