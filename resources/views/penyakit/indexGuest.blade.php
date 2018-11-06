@extends('layouts.guest')
@section('content')
<div class="inner-page">
</div>

<!-- ab -->
<section class="banner-bottom-w3layouts py-lg-5 py-md-5 py-3" id="feature">
    <div class="container">
        <div class="inner-sec-w3ls-agileits py-lg-5 py-3">
            <h3 class="tittle text-center">Katalog Penyakit</h3>
            <br>    
            <div class="card">
                <div class="card-body"><br>
                    {!! Form::open(['action'=> 'penyakitController@search', 'method' => 'GET','class'=>'form-inline'])!!}
                    @csrf
                    <input class="form-control col-11 mr-sm-auto" style="font-size: 150%" name="search" type="search" placeholder="cari" value="{{request()->query('search')}}" aria-label="Search">
                    {{Form::submit('Cari',['class'=>'btn btn-lg btn-outline-success'])}}
                    {!! Form::close() !!}
                    <br><br>
                    @if (count($penyakit) > 0)
                    <div class="list-group">
                        @foreach ($penyakit as $p)  
                        <a href="/penyakit/{{$p->id}}" class="list-group-item list-group-item-action btn-outline-warning" style="font-size: 150%">{{$p->namaPenyakit}}</a>        
                        @endforeach
                    </div>
                    <br>
                    {!!$penyakit->links()!!}  
                    @else
                    <p>Data Penyakit Tidak Ditemukan</p>
                    @endif
                    @if (@isset(Auth::user()->id))
                    @if (Auth::user()->level==1)
                    <a href="/penyakit/create" class="btn btn-primary text-light">Buat Data Penyakit</a>
                    @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- //ab -->

@endsection
