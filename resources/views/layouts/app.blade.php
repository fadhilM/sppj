<!DOCTYPE html>
<html lang="en">

<head> 
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    
    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('asset/fontAwesome/css/font-awesome.min.css') }}"/>
    
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/lightBootstrap/assets/css/light-bootstrap-dashboard.css')}}" rel="stylesheet" />
    {{-- <link href="{{ asset('asset/simpleSidebar/css/bootstrap.min.css') }}" rel="stylesheet"> --}}
    
    <!-- Custom CSS -->
    <link href="{{ asset('asset/simpleSidebar/css/simple-sidebar.css') }} " rel="stylesheet">
    
    
    <style type="text/css">
        .r1{
            align-items: center;
            background-color: white;
            padding-top: 5%;
            padding-left: 10%;
            padding-right: 10%;
            padding-bottom: 5%;
            border-radius: 15px;
        }
    </style>
</head>

<body>
    
    <div class="wrapper">
        @include('inc.sidebar')
        
        <div class="main-panel">
            @include('inc.navbar')
            
            <div class="content">
                <div class="container-fluid">
                    @include('inc.popup')
                    <br>
                    @yield('content')
                </div>
            </div>
            @include('inc.footer')
        </div>
    </div>
    
    {{-- @include('inc.navbar') --}}
    {{-- <br><br><br>
        @yield('guest')
        <div id="wrapper">
            @yield('sidebar')
            <!-- Page Content -->
            <div class="container">
                <br><br>
                @include('inc.popup')
                <br><br>
                @yield('content')
            </div>
            <!-- /#page-content-wrapper -->
            
        </div>
        <!-- /#wrapper --> --}}
        
        <!--   Core JS Files   -->
        <script src="{{ asset('asset/lightBootstrap/assets/js/core/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('asset/lightBootstrap/assets/js/core/popper.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('asset/lightBootstrap/assets/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
        
        <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
        <script src="{{ asset('asset/lightBootstrap/assets/js/plugins/bootstrap-switch.js')}}"></script>
        
        <!--  Chartist Plugin  -->
        <script src="{{ asset('asset/lightBootstrap/assets/js/plugins/chartist.min.js')}}"></script>
        
        <!--  Notifications Plugin    -->
        <script src="{{ asset('asset/lightBootstrap/assets/js/plugins/bootstrap-notify.js')}}"></script>
        
        <!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
        <script src="{{ asset('asset/lightBootstrap/assets/js/light-bootstrap-dashboard.js')}}" type="text/javascript"></script>
        
        <!-- Bootstrap Core JavaScript -->
        {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
        
        <script type="text/javascript">
            $(document).ready(function() {
                // Javascript method's body can be found in assets/js/demos.js
                demo.initDashboardPageCharts();
                
                demo.showNotification();
                
            });
        </script>
        
        <!-- CKEDITOR -->
        {{-- <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script> --}}
        <script src="{{ asset('asset/ckeditor/ckeditor.js') }}"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>
        <script>
            
        $('#editNode').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.id').val(recipient)
        })
        </script>
        
    </body>
    
    </html>
    