<!DOCTYPE html>
    <!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Material Admin</title>
        
        <!-- Vendor CSS -->
        <link href="{{ asset('vendors/animate-css/animate.min.css') }}" rel="stylesheet">
            
        <!-- CSS -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    
    <body class="login-content">
        
        @yield('content')
        
      
        <!-- Javascript Libraries -->
        <script src="{{ asset('js/app.js') }}"></script>
        
        <script src="vendors/waves/waves.min.js"></script>
        
        <script src="js/functions.js"></script>

        @include('partials.iewarning')
    </body>
</html>