@extends('layouts.guest')
@section('content')
        <div class="slide-window">
            <div class="slide-wrapper" style="width:300%;">
                <div class="slide">
                    <div class="slide-caption text-center">
                        <p class="text-uppercase">The right choice</p>
                        <h3 class="text-uppercase">Improving agriculture, improving lives.</h3>
                    </div>
                </div>
                <div class="slide slide2">
                    <div class="slide-caption text-center">
                        <p class="text-uppercase">The right choice</p>
                        <h3 class="text-uppercase">Improving agriculture, improving lives.</h3>
                    </div>
                </div>
                <div class="slide slide3">
                    <div class="slide-caption text-center">
                        <p class="text-uppercase">The right choice.</p>
                        <h3 class="text-uppercase">Improving agriculture, improving lives.</h3>
                    </div>
                </div>
            </div>
            <div class="slide-controller">
                <div class="slide-control-left">
                    <div class="slide-control-line"></div>
                    <div class="slide-control-line"></div>
                </div>
                <div class="slide-control-right">
                    <div class="slide-control-line"></div>
                    <div class="slide-control-line"></div>
                </div>
            </div>
        </div>
        <!-- main image slider container -->
    </div>
    <!-- end of main image slider container -->

    <!-- banner-bottom-w3layouts -->
    <div class="banner-bottom-w3layouts py-lg-5 py-3">
        <div class="container">
            <div class="inner-sec-w3ls-agileits py-lg-5 py-3">
                <h4 class="sub-tittle text-uppercase text-center">What we do</h4>
                <h3 class="tittle text-center mb-lg-5 mb-3">
                    WHAT WE OFFER</h3>
                <ul class="grid cs-style-5 row">
                    <li class="grid-info-img">
                        <figure>
                            <img src="{{ asset('asset/homepage/images/g1.jpg') }}" class="img-fluid" alt="img03">
                            <figcaption>
                                <h3>Vegitables</h3>
                                <span>Lorem ipsum </span>   
                            </figcaption>
                        </figure>
                    </li>
                    <li class="grid-info-img">
                        <figure>
                            <img src="{{ asset('asset/homepage/images/g2.jpg') }}" class="img-fluid" alt="img03">
                            <figcaption>
                                <h3>Berries</h3>
                                <span>Lorem ipsum </span>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="grid-info-img">
                        <figure>
                            <img src="{{ asset('asset/homepage/images/g3.jpg') }}" class="img-fluid" alt="img03">
                            <figcaption>
                                <h3>Organic Dairy</h3>
                                <span>Lorem ipsum </span>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="grid-info-img">
                        <figure>
                            <img src="{{ asset('asset/homepage/images/g4.jpg') }}" class="img-fluid" alt="img03">
                            <figcaption>
                                <h3>Seeds</h3>
                                <span>Lorem ipsum </span>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="grid-info-img">
                        <figure>
                            <img src="{{ asset('asset/homepage/images/g5.jpg') }}" class="img-fluid" alt="img03">
                            <figcaption>
                                <h3>Herbs</h3>
                                <span>Jacob Cummings</span>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="grid-info-img">
                        <figure>
                            <img src="{{ asset('asset/homepage/images/g6.jpg') }}" class="img-fluid" alt="img03">
                            <figcaption>
                                <h3>Farm</h3>
                                <span>Lorem ipsum </span>
                            </figcaption>
                        </figure>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--// banner-bottom-w3layouts -->
    <!-- /bottom-last -->
    <section class="bottom-last">
        <div class="bottom-bg py-5 bs-slider-overlay text-left">
            <div class="container">
                <h3 class="tittle text-left"> WHAT WE OFFER</h3>
                <p class="text-white mb-4">Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.Lorem ipsum dolor sit amet Neque porro quisquam est qui dolorem Lorem int ipsum dolor sit amet.</p>
                <div class="log-in pb-md-5 pb-3">
                    <a class="hover-2 btn text-uppercase" href="single.html">Read More</a>
                </div>
            </div>

        </div>
    </section>
    <!-- //bottom-last -->
@endsection
