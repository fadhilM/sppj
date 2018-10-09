<!DOCTYPE html>
<html lang="en">

<head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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

<body style="background-color: #9FA6B9;">

    @include('inc.navbar')
    <br><br><br>
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
    <!-- /#wrapper -->
    
    <!-- jQuery -->
    <script src=" {{ asset('asset/simpleSidebar/js/jquery.js') }}"></script>
    
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>

    <!-- CKEDITOR -->
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
    
</body>

</html>


{{-- <body>
    @include('inc.navbar')
    <div class="col-lg-12">
        <div class="container">
            <div class="row">
                <div class="col-9">
                    <br>
                    @include('inc.popup')
                    <br>
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</body> --}}
</html>
