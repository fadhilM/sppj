@extends('layouts.dashboard')
@section('sidebar')
@include('inc.sidebar')
@endsection
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
@endsection