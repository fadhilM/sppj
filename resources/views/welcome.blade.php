@extends('layouts.guest')
@section('content')
        <div class="slide-window">
            <div class="slide-wrapper" style="width:300%;">
                <div class="slide">
                    <div class="slide-caption text-center">
                        <p class="text-uppercase">Pilihan Terbaik</p>
                        <h3 class="text-uppercase">Perbaiki Kualitas Jagung Untuk Pangan Yang Lebih Baik</h3>
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
                <ul class="grid cs-style-5 row">
                    <li class="grid-info-img">
                        <figure>
                            <img src="{{ asset('asset/homepage/images/g1.jpg') }}" class="img-fluid" alt="img03">
                            <figcaption>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="grid-info-img">
                        <figure>
                            <img src="{{ asset('asset/homepage/images/g2.jpg') }}" class="img-fluid" alt="img03">
                            <figcaption>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="grid-info-img">
                        <figure>
                            <img src="{{ asset('asset/homepage/images/g3.jpg') }}" class="img-fluid" alt="img03">
                            <figcaption>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="grid-info-img">
                        <figure>
                            <img src="{{ asset('asset/homepage/images/g4.jpg') }}" class="img-fluid" alt="img03">
                            <figcaption>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="grid-info-img">
                        <figure>
                            <img src="{{ asset('asset/homepage/images/g5.jpg') }}" class="img-fluid" alt="img03">
                            <figcaption>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="grid-info-img">
                        <figure>
                            <img src="{{ asset('asset/homepage/images/g6.jpg') }}" class="img-fluid" alt="img03">
                            <figcaption>
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
                <h3 class="tittle text-left">Tentang Kami</h3>
                <p class="text-white mb-4" style="font-size: 120%;"> 
                    Pepplecorn bertujuan untuk memperbaiki kualitas tanaman jagung dengan membantu dalam mendiagnosoa
                    Penyakit yang diderita oleh tanaman jagung serta memberikan solusi dalam mengatasi penyakit tersebut.
                </p>
            </div>

        </div>
    </section>
    <!-- //bottom-last -->
@endsection
