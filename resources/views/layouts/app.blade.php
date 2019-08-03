<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Connexion</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap/bootstrap.min.css') }}">

        <!-- Optional theme -->
        <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap/bootstrap-theme.min.css') }}">

        <!-- Custom css -->
        <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">

        <!-- New Style css -->
        <link rel="stylesheet" href="{{ URL::asset('assets/css/authentification.css') }}">
        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ URL::asset('assets/css/font-awesome.min.css') }}">
        
        <link rel="stylesheet" href="{{ URL::asset('assets/css/ionicons.min.css') }}">
        
        <!-- Magnific Popup -->
        <link rel="stylesheet" href="{{ URL::asset('assets/css/magnific-popup.css') }}">
        
        <link rel="stylesheet" href="{{ URL::asset('assets/css/jquery.fullPage.css') }}">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
<body>
      
        <!--  loader  -->
        <div id="myloader">
            <span class="loader">
                <div class="inner-loader"></div>
            </span>
        </div>

        @yield('content')

        @include('include.script')

</body>
</html>
