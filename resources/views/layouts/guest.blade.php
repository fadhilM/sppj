<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Arable Agriculture Category Bootstrap responsive Web Template | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Arable a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="{{ asset('asset/homepage/css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{ asset('asset/homepage/css/component.cs') }}s" type="text/css" media="all">
    <link href="{{ asset('asset/homepage/css/style.css') }}" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{ asset('asset/homepage/css/owl.theme.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('asset/homepage/css/owl.carousel.css') }}" type="text/css" media="screen" property="" />
    <link href="{{ asset('asset/homepage/css/minimal-slider.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('asset/homepage/css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=BenchNine:300,400,700" rel="stylesheet">
</head>

<body>
        <div class="mian-content">

        <div class="header-top-w3layouts-agile">
            <div class="top-head-wthree text-left">
                <div class="row top-content-info">
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 login-right-img text-center">
                    </div>
                    <div class="col-md-6 logo text-center">
                        <h1>
                            <a class="navbar-brand" href="index.html">
                                <i class="fas fa-leaf"></i>Pepplecorn</a>
                        </h1>
                    </div>
                    <div class="col-md-3 login-right-img text-center">
                        <a class="request text-uppercase" href="#" data-toggle="modal" data-target="#exampleModalCenter">Sign In</a>
                    </div>
                </div>
            </div>
            <div class="header-bg">
                <div class="container">
                    <header>
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <button class="navbar-toggler navbar-toggler-right mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
				   </button>

                            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                                <ul class="navbar-nav mr-lg-auto ml-lg-auto text-left">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/') }}">Beranda
                                        <span class="sr-only">(current)</span>
                                    </a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="{{route('diagnosa')}}">Diagnosa Penyakit</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('penyakit.index')}}">Katalog Penyakit</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>

                    </header>
                </div>
            </div>
        </div>
    </div>
    <!-- end of main image slider container -->
    @yield('content')

        <!--footer -->
    <footer class="footer-emp-wthree bg-dark dotts py-lg-5 py-3">
        <div class="container">
            <div class="row footer-top">
                <div class="col-lg-4 footer-grid-w3ls">
                    <div class="footer-title">
                        <h3>About Us</h3>
                    </div>
                    <div class="footer-text">
                        <p>Curabitur non nulla sit amet nislinit tempus convallis quis ac lectus. lac inia eget consectetur sed, convallis at tellus. Nulla porttitor accumsana tincidunt.</p>
                        <ul class="social-icons">
                            <li class="mr-1"><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                            <li class="mx-1"><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li class="mx-1"><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
                            <li class="mx-1"><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 footer-grid-w3ls">
                    <div class="footer-title">
                        <h3>Get in touch</h3>
                    </div>
                    <div class="contact-info">
                        <h4>Location :</h4>
                        <p>0926k 4th block building, king Avenue, New York City.</p>
                        <div class="phone">
                            <h4>Contact :</h4>
                            <p>Phone : +121 098 8907 9987</p>
                            <p>Email :
                                <a href="mailto:info@example.com">info@example.com</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 footer-grid-w3ls">
                    <div class="footer-title">
                        <h3>Quick Links</h3>
                    </div>
                    <ul class="links">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="about.html">About</a>
                        </li>
                        <li>
                            <a href="gallery.html">Gallery</a>
                        </li>
                        <li>
                            <a href="pricing.html">Services</a>
                        </li>
                        <li>
                            <a href="contact.html">Contact Us</a>
                        </li>
                    </ul>
                    <ul class="links">
                        <li>
                            <a href="services.html">Features</a>
                        </li>
                        <li>
                            <a href="contact.html">Support</a>
                        </li>
                        <li>
                            <a href="blog.html">Blog</a>
                        </li>
                    </ul>

                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="copyright-w3 mt-4">
                <p class="copy-right text-center ">&copy; 2018 Arable. All Rights Reserved | Design by
                    <a href="http://w3layouts.com/"> W3layouts </a>
                </p>
            </div>
        </div>
    </footer>
    <!-- //footer -->

    <!--model-forms-->
    <!--/Login-->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        
                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-center mb-4">Login Pakar</h5>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label class="mb-2">Alamat Email</label>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="mb-2">Password</label>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary">
                                    Masuk
                            </button>
                        </form>
                    </div>
                </div>
                

            </div>
        </div>
    </div>
    <!-- //Login -->
      <!-- //stats -->  
      
    <!--//model-form-->
    <!-- js -->
    <script src="{{ asset('asset/homepage/js/jquery-2.2.3.min.js') }}"></script>
    <script src="{{ asset('asset/homepage/js/minimal-slider.js') }}"></script>
    <script src="{{ asset('asset/homepage/js/toucheffects.js') }}"></script>
    <script src="{{ asset('asset/homepage/js/modernizr.custom.js') }}"></script>
    <!-- carousel -->
    <script src="{{ asset('asset/homepage/js/owl.carousel.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 1,
                        nav: false
                    },
                    900: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: 2,
                        nav: true,
                        loop: false,
                        margin: 20
                    }
                }
            })
        })
    </script>
    <!-- //carousel -->
    <script>
        $(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->
    <!-- stats -->
    <script src="{{ asset('asset/homepage/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('asset/homepage/js/jquery.countup.js') }}"></script>
    <script>
        $('.counter').countUp();
    </script>
    <!-- password-script -->
    <script>
        window.onload = function() {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- //password-script -->

    <!--/ start-smoth-scrolling -->
    <script src="{{ asset('asset/homepage/js/move-top.js') }}"></script>
    <script src="{{ asset('asset/homepage/js/easing.js') }}"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->
    <!-- /js -->
    <script src="{{ asset('asset/homepage/js/bootstrap.js') }}"></script>
    <!-- //js -->
    <script>
        @if(count($errors->all()) > 0)
            $('[data-target="#exampleModalCenter"]').trigger('click');
        @endif
    </script>
</body>

</html>