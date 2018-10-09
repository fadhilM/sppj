@extends('layouts.app')
@if (@isset(Auth::user()->id))
@section('sidebar')
@include('inc.sidebar')
@endsection    
@endif
@section('content')
<div class="r1">
    <h1>{{$penyakit->namaPenyakit}}</h1>
    <hr class="hr"><br><br>
    <div>
        {!!$penyakit->deskripsi!!}
    </div>
    <br>
    <br><hr>
    <a href="/penyakit" class="btn btn-danger">Kembali</a>
    
    @if (@isset(Auth::user()->id))
    @if (Auth::user()->level==1)
    <a href="/penyakit/{{$penyakit->id}}/edit" class="btn btn-primary">Edit</a>
    {!!Form::open(['action' =>['penyakitController@destroy',$penyakit->id], 'method' => 'POST', 'class' =>'float-right'])!!}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Hapus Data Penyakit',['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
    @endif
    @endif
</div>
@endsection