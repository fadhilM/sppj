@extends('layouts.app')

@guest
@section('guest')
@else
@section('sidebar')
@include('inc.sidebar')
@endsection  
@section('content')
@endguest

<div class="r1">
    <h1>{{$penyakit->namaPenyakit}}</h1>
    <hr class="hr"><br><br>
    <div>
        {!!$penyakit->deskripsi!!}
    </div>
    <br>
</div>
@endsection