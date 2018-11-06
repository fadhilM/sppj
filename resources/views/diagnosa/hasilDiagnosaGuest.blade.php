@extends('layouts.guest')
@section('content')
<div class="inner-page">
</div>

<!-- ab -->
<section class="banner-bottom-w3layouts py-lg-5 py-md-5 py-3" id="feature">
    <div class="container">
        <div class="inner-sec-w3ls-agileits py-lg-5 py-3">
            <h4 class="sub-tittle text-uppercase text-center">Hasil Diagnosa</h4>
        <h3 class="tittle text-center">{{$penyakit->namaPenyakit}}</h3>
            
            <div class="about-info mt-lg-5 mt-md-4 mt-4">
                <img src="images/1.jpg" class="img-fluid" alt="" />
            <p class="my-lg-5 my-3">{!!$penyakit->deskripsi!!}</p>
                </div>
            </div>
        </div>
    </section>
    <!-- //ab -->
    @endsection
    