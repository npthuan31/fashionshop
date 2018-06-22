<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fashion Shop | @yield('title')</title>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,700%7CRaleway:300,400,700%7CPlayfair+Display:700' rel='stylesheet'>

    <!-- Css -->
    <link rel="stylesheet" href="{{URL::to('css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{URL::to('css/magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{URL::to('css/font-icons.css')}}" />
    <link rel="stylesheet" href="{{URL::to('css/sliders.css')}}" />
    <link rel="stylesheet" href="{{URL::to('css/style.css')}}" />
    <link rel="stylesheet" href="{{URL::to('css/animate.min.css')}}" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{URL::to('img/favicon.ico')}}">
    <link rel="apple-touch-icon" href="{{URL::to('img/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{URL::to('img/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{URL::to('img/apple-touch-icon-114x114.png')}}">

</head>

<body class="relative">

<!-- Preloader -->
    <!--<div class="loader-mask">
        <div class="loader">
            <div></div>
            <div></div>
        </div>
    </div> -->

    @yield('content')

    <!-- jQuery Scripts -->
    <script type="text/javascript" src="{{URL::to('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('js/jquery.confirm.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('js/plugins.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('js/scripts.js')}}"></script>

</body>
</html>