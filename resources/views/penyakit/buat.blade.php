@extends('layouts.app')
@section('sidebar')
@include('inc.sidebar')
@endsection
@section('content')
<div class="r1">
<div class="container">
    <h1>Data Penyakit</h1>
    <br><br>
    {!! Form::open(['action'=> 'penyakitController@store', 'method' => 'POST'])!!}
    <div class="form-group row">
        {{Form::label('namaPenyakit','Nama Penyakit',['class'=>'col-sm-2 col-form-label'])}}
        {{Form::text('namaPenyakit','',['class' => 'form-control col-sm-9', 'placeholder' => 'Nama Penyakit'])}}
    </div>
    <div class="form-group">
        {{Form::label('deskripsi','Deskripsi')}}
        {{Form::textarea('deskripsi','',['id' => 'article-ckeditor','class'=>'form-control','placeholder'=>'Berisi Deskripsi Penyakit Beserta Cara Penanganannya'])}}
    </div>
    {{Form::submit('Buat',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
</div>
@endsection