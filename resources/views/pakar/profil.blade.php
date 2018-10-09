@extends('layouts.app')
@section('sidebar')
@include('inc.sidebar')
@endsection
@section('content')
<div class="container">
    <div class="align-items-center">
        <h1>Profil Pakar</h1>
        <br>
        <table class="table">
            <tr>
                <th scope="row">Nama</th>
                <td>{{Auth::user()->nama}}</td>
            </tr>
            <tr>
                <th scope="row">Email</th>
                <td>{{Auth::user()->email}}</td>
            </tr>
            <tr>
                <th scope="row">Alamat</th>
                <td>{{Auth::user()->alamat}}</td>
            </tr>
            <tr>
                <th scope="row">Nomor Handphone</th>
                <td>{{Auth::user()->no_hp}}</td>
            </tr>
        </table>
    </div>
</div>
@endsection