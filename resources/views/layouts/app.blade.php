<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="stacks">
        <!-- Remove Tap Highlight on Windows Phone IE -->
        <meta name="msapplication-tap-highlight" content="no"/>
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Title -->
        <title>LedgerBook|My Tech Table</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
        
        <link href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('plugins/font-awesome/css/all.min.css')}}" rel="stylesheet">
        <link href="{{asset('plugins/waves/waves.min.css')}}" rel="stylesheet">
        <link href="{{asset('plugins/nvd3/nv.d3.min.css')}}" rel="stylesheet">

      
        <!-- Theme Styles -->
        <link href="{{asset('css/alpha.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/custom.css')}}" rel="stylesheet">
        <link href="{{asset('css/jquery-ui.css')}}" rel="stylesheet">
       
    </head>
    <body class="
        @if(Route::current()->getName() == 'login' or Route::current()->getName() == 'password.request')
            login-page sign-in loaded
        @elseif(Route::current()->getName() == 'register')
            login-page sign-up loaded
        @else

        @endif
        ">

        <div class="loader">
            <div class="spinner-border text-primary" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>

        <div class="alpha-app">

            @if (Auth::check())
                @include('layouts.header')
                @include('layouts.search')
                @include('layouts.sidebar')
                <div class="page-content"> 
                    @yield('content')
                </div>
            @else
                @yield('auth')
            @endif

           

            
            
            
            
        </div><!-- App Container -->
        
        <!-- Javascripts -->
        <script src="{{asset('plugins/jquery/jquery-3.4.1.min.js')}}"></script>
        <script src="{{asset('plugins/jquery/jquery-ui.js')}}"></script>
        <script src="{{asset('plugins/bootstrap/popper.min.js')}}"></script>
        <script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('plugins/waves/waves.min.js')}}"></script>
        <script src="{{asset('plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
        <script src="{{asset('plugins/d3/d3.min.js')}}"></script>
        <script src="{{asset('plugins/nvd3/nv.d3.min.js')}}"></script>
        <script src="{{asset('plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{asset('plugins/apexcharts/dist/apexcharts.min.js')}}"></script>
        <script src="{{asset('plugins/flot/jquery.flot.min.js')}}"></script>
        <script src="{{asset('plugins/flot/jquery.flot.time.min.js')}}"></script>
        <script src="{{asset('plugins/flot/jquery.flot.symbol.min.js')}}"></script>
        <script src="{{asset('plugins/flot/jquery.flot.resize.min.js')}}"></script>
        <script src="{{asset('plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
        <script src="{{asset('js/alpha.min.js')}}"></script>
        <script src="{{asset('js/pages/dashboard.js')}}"></script>
        @include('layouts.js')
    </body>
</html>