<!doctype html>
<html lang="en">
    <head>
        <title>@yield('title')</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
        <!-- Material Kit CSS -->
        <link href="{{asset('css/material-kit.css?v=2.2.0')}}" rel="stylesheet" />
        <link href="{{asset('css/custom.css')}}" rel="stylesheet" />
    </head>

    <body class="@yield('page-class') sidebar-collapse" style="width: 100vw; height: 100vh; background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 0%, rgba(0,212,255,1) 100%);">
        @yield('content')
        <!--   Core JS Files   -->
        <script src="{{asset('js/quickFireQuiz.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/core/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/core/popper.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/plugins/moment.min.js')}}"></script>
        <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
        <script src="{{asset('js/plugins/bootstrap-datetimepicker.js')}}" type="text/javascript"></script>
        <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
        <script src="{{asset('js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
        <!--  Google Maps Plugin    -->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
        <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
        <script src="{{asset('js/plugins/bootstrap-tagsinput.js')}}"></script>
        <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
        <script src="{{asset('js/plugins/bootstrap-selectpicker.js')}}" type="text/javascript"></script>
        <!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
        <script src="{{asset('js/plugins/jasny-bootstrap.min.js')}}" type="text/javascript"></script>
        <!--	Plugin for Small Gallery in Product Page -->
        <script src="{{asset('js/plugins/jquery.flexisel.js')}}" type="text/javascript"></script>
        <!-- Plugins for presentation and navigation  -->
        <script src="{{asset('demo/modernizr.js')}}" type="text/javascript"></script>
        <script src="{{asset('demo/vertical-nav.js')}}" type="text/javascript"></script>
        <!-- Place this tag in your head or just before your close body tag. -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
        <script src="{{asset('js/material-kit.js?v=2.2.0')}}" type="text/javascript"></script>
        <script>
            $(document).ready(function() {
            //init DateTimePickers
            materialKit.initFormExtendedDatetimepickers();

            // Sliders Init
            materialKit.initSliders();
            });
        </script>
    </body>
</html>
