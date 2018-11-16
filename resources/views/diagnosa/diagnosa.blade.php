@extends('layouts.app')
@guest
@section('guest')
@else
@section('sidebar')
@include('inc.sidebar')
@endsection  
@section('content')
@endguest
<div class="container">
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
            @if(isset($gejala))
            <h2 style="text-align: center;">{{$gejala->pertanyaan}}</h2>
            @else
            <h1>Maaf Penyakit Tidak Ditemukan</h1>
            @endif
        </div>
        <div class="card-footer text-center">
            {!!Form::open(['action'=> ['gejalaController@node',$gejala->id], 'method' => 'POST'])!!}
            {{Form::submit('Ya',['class'=>'btn btn-primary','value'=>'ya','name'=>'submit'])}}&nbsp;&nbsp;&nbsp;
            {{Form::submit('Tidak',['class'=>'btn btn-secondary','value'=>'tidak','name'=>'submit'])}}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection