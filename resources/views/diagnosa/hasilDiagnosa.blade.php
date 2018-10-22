@extends('layouts.app')

@guest
@section('guest')
@else
@section('sidebar')
@include('inc.sidebar')
@endsection  
@section('content')
@endguest
<h1>{{$penyakit->namaPenyakit}}</h1>
@endsection