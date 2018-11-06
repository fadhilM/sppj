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
    <a class="btn btn-danger float-right" data-toggle="modal" data-target="#delete">Hapus Data Penyakit</a>
    @if (@isset(Auth::user()->id))
    @if (Auth::user()->level==1)
    <a href="/penyakit/{{$penyakit->id}}/edit" class="btn btn-primary">Edit</a>
    <!-- Modal -->
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Perhatian</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Jika data penyakit ini dihapus maka akan menghapus data gejalanya jika ada. Apakah anda yakin ingin dihapus ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                    {!!Form::open(['action' =>['penyakitController@destroy',$penyakit->id], 'method' => 'POST', 'class' =>'float-right'])!!}
                    {{Form::hidden('_method','DELETE')}}
                    {{Form::submit('Ya,Saya Yakin',['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
    
    @endif
    @endif
</div>
@endsection