@extends('layouts.guest')
@section('content')
    <!-- /bottom-last -->
    <section class="bottom-last">
        <div class="bottom-bg py-5 bs-slider-overlay text-left">
            <div class="container ">
                <h3 class="tittle text-center"> Diagnosa Penyakit</h3>
            <h4 class="text-white mb-4 text-center">{{$gejala->pertanyaan}}</h4>
            <br>
                <div class="log-in pb-md-5 pb-3 text-center">
                {!!Form::open(['action'=> ['gejalaController@node',$gejala->id], 'method' => 'POST'])!!}
                {{Form::submit('Ya',['class'=>'btn btn-lg btn-outline-danger','style'=>'margin-right:10px;','value'=>'ya','name'=>'submit'])}}
                {{Form::submit('Tidak',['class'=>'btn btn-lg btn-outline-warning','value'=>'tidak','name'=>'submit'])}}
                {!! Form::close() !!}
                </div>
            </div>

        </div>
    </section>
    <!-- //bottom-last --> 
@endsection
