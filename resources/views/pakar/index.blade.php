@extends('layouts.app')
@section('sidebar')
@include('inc.sidebar')
@endsection

@section('content')
<div class="r1">
<div class="container">
    <h1 class="h1">DATA PAKAR</h1>
    @if (count($pakar) > 0)
    <table class="table table-bordered" style="width: 100%;">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Nama Pakar</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Nomor HP</th> 
                <th>Aksi</th>
            </tr>
        </thead>
        <?php $no=1 ?>
        @foreach ($pakar as $pk)
        <tr>
            <td>{{$no}}</td>
            <td>{{$pk->nama}}</td>
            <td>{{$pk->email}}</td>
            <td>{{$pk->alamat}}</td>
            <td>{{$pk->no_hp}}</td>
            <td>
                <a href="/pakar/{{$pk->id}}/edit" class='btn btn-primary'>Edit</a>
            </td>
        </tr>
        
        <?php $no++ ?>
        @endforeach
    </table>
    {{$pakar->links()}}
    @else
    <p>Tidak Ada Data Pakar</p>
    @endif
    
    <a class="btn btn-danger" href="{{ route('register') }}">Buat Data Pakar</a>
</div>
</div>

@endsection