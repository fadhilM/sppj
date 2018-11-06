@extends('layouts.app')
@section('sidebar')
@include('inc.sidebar')
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card striped-tabled-with-hover">
            <div class="card-header">
                <h2 class="card-title text-center">Data Pakar</h2>
            </div>
            <div class="card-body table-responsive">
                @if (count($pakar) > 0)
                <table class="table table-hover table-striped" style="width: 100%">
                    <thead class="">
                        <tr>
                            <th>Nama Pakar</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Nomor HP</th> 
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pakar as $pk)
                        <tr>
                            <td>{{$pk->nama}}</td>
                            <td>{{$pk->email}}</td>
                            <td>{{$pk->alamat}}</td>
                            <td>{{$pk->no_hp}}</td>
                            <td>
                                <a href="/pakar/{{$pk->id}}/edit" class='btn btn-primary'>Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$pakar->links()}}
                @else
                <p>Tidak Ada Data Pakar</p>
                @endif
                &nbsp&nbsp&nbsp<a class="btn btn-danger" href="{{ route('register') }}">Buat Data Pakar</a>
            </div>
        </div>
    </div>
</div>
@endsection