@extends('layouts.app')

@if (@isset(Auth::user()->id))
@section('sidebar')
@include('inc.sidebar')
@endsection    
@endif

@section('content')
<div class="card">
  <div class="card-body">
    @if (Auth::user()->level==0)
        <h1 class="text-center">Katalog Penyakit</h1>
    @else
        <h1>Data Penyakit</h1>
    @endif
      <br>
    {!! Form::open(['action'=> 'penyakitController@search', 'method' => 'GET','class'=>'form-inline'])!!}
    @csrf
    <input class="form-control col-11 mr-sm-auto" name="search" type="search" placeholder="Search" value="{{request()->query('search')}}" aria-label="Search">
    {{Form::submit('Cari',['class'=>'btn btn-success my-2 my-sm-auto'])}}
    {!! Form::close() !!}
    <br><br>
    @if (count($penyakit) > 0)
    <div class="list-group">
      @foreach ($penyakit as $p)  
      <a href="/penyakit/{{$p->id}}" class="list-group-item list-group-item-action">{{$p->namaPenyakit}}</a>        
      @endforeach
    </div>
    <br>
    {!!$penyakit->links()!!}  
    @else
    <p>Data Penyakit Tidak Ditemukan</p>
    @endif
    @if (@isset(Auth::user()->id))
    @if (Auth::user()->level==1)
    <a href="/penyakit/create" class="btn btn-primary">Buat Data Penyakit</a>
    @endif
    @endif
  </div>
</div>
@endsection