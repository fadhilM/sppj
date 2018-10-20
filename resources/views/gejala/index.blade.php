@extends('layouts.app')
@section('sidebar')
@include('inc.sidebar')
@endsection

@section('content')
<div class="container">
    <h1 class="h1">DATA GEJALA</h1>
    @if (count($gejala) > 0)
    <table class="table table-bordered" style="width: 100%;">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Pertanyaan</th>
                <th>Ya</th>
                <th>Tidak</th>
                <th>Posisi</th> 
                <th>ID Penyakit</th>
                <th>Setting</th>
            </tr>
        </thead>
        <?php $no=1 ?>
        @foreach ($gejala as $gj)
        <tr>
            <td>{{$gj->id}}</td>
            <td>{{$gj->pertanyaan}}</td>
            <td>{{$gj->ya}}</td>
            <td>{{$gj->tidak}}</td>
            <td>{{$gj->posisi}}</td>
            <td>{{$gj->penyakit ? $gj->penyakit->namaPenyakit :''}}</td>
            <td>
                <a data-toggle="modal" data-target="#editNode" class='btn btn-success btn-sm'>Edit Node</a>
                <a href="/gejala/{{$gj->id}}/edit" class='btn btn-primary btn-sm'>Edit</a>
                <a href="/gejala/{{$gj->id}}/delete" class='btn btn-danger btn-sm'>Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
    <!-- Modal -->
    <div class="modal fade" id="editNode" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Node</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        {{Form::label('ya','ya',['class'=>'col-sm-2 col-form-label'])}}
                        {{Form::select('gejala', $gejala->pluck('pertanyaan','id')->toArray(), null,['class' => 'btn btn-secondary dropdown-toggle'], ['placeholder' => 'Pick a size...'])}}
                    </div>
                    <div class="form-group row">
                        {{Form::label('tidak','tidak',['class'=>'col-sm-2 col-form-label'])}}
                        {{Form::select('gejala', $gejala->pluck('pertanyaan','id')->toArray(), null,['class' => 'btn btn-secondary dropdown-toggle'], ['placeholder' => 'Pick a size...'])}}
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    {{$gejala->links()}}
    @else
    <p>Tidak Ada Data Gejala</p>
    @endif
    
    <a class="btn btn-danger" href="/gejala/create">Buat Data Gejala</a>
</div>

@endsection