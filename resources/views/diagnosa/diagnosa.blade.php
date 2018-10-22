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
            <h1>{{$gejala->pertanyaan}}</h1>
            <div>
                {!!Form::open(['action'=> ['gejalaController@node',$gejala->id], 'method' => 'POST'])!!}
                {{Form::submit('Ya',['class'=>'btn btn-primary','value'=>'ya','name'=>'submit'])}}
                {{Form::submit('Tidak',['class'=>'btn btn-secondary','value'=>'tidak','name'=>'submit'])}}
                {!! Form::close() !!}
            </div>
            @else
            <h1>Maaf Penyakit Tidak Ditemukan</h1>
            @endif
        </div>
    </div>
</div>
@endsection