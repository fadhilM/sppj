@extends('layouts.app')
@section('sidebar')
@include('inc.sidebar')
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Buat Data Gejala</div>
                
                <div class="card-body">
                    {!! Form::open(['action'=> ['gejalaController@update',$gejala->id], 'method' => 'POST'])!!}
                    <div class="form-group row">
                        {{Form::label('pertanyaan','Pertanyaan Tentang Gejala',['class'=>'col-sm-2 col-form-label'])}}
                        {{Form::text('pertanyaan',$gejala->pertanyaan,['class' => 'form-control col-sm-9', 'placeholder' => 'Pertanyaan'])}}
                    </div>
                    <div class="form-group row">
                        {{Form::label('posisi','Posisi Gejala',['class'=>'col-sm-2 col-form-label'])}}
                        {{Form::select('posisi', ['1' => 'Awal', '2' => 'Tengah','3'=>'Akhir'], $gejala->posisi,['class' => 'btn btn-secondary dropdown-toggle'])}}
                    </div>
                    <div class="form-group row">
                        {{Form::label('id_penyakit','Nama Penyakit',['class'=>'col-sm-2 col-form-label'])}}
                        {{Form::select('id_penyakit', $penyakit->pluck('namaPenyakit','id')->toArray(), $gejala->id_penyakit,['class' => 'btn btn-secondary dropdown-toggle'])}}
                    </div>
                    <div class="form-group row">
                    </div>
                    {{Form::hidden('_method','PUT')}}
                    <a class="btn btn-danger" href="{{route('gejala.index')}}">Batal</a>
                    {{Form::submit('Ubah',['class'=>'btn btn-primary'])}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection