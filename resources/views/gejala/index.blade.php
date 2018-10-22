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
                <th>Aksi</th>
            </tr>
        </thead>
        <?php $no=1 ?>
        @foreach ($gejala as $gj)
        <tr>
            <td>{{$gj->id}}</td>
            <td>{{$gj->pertanyaan}}</td>
            <td>{{$gj->ya}}</td>
            <td>{{$gj->tidak}}</td>
            @if ($gj->posisi == 1)
                <td>Awal</td>
            @elseif($gj->posisi == 2)
                <td>Tengah</td>
            @else
                <td>Akhir</td>
            @endif
            {{-- <td>{{$gj->posisi}}</td> --}}
            <td>{{$gj->penyakit ? $gj->penyakit->namaPenyakit :''}}</td>
            <td>
                <a data-toggle="modal" data-target="#editNode" class='btn btn-success btn-sm text-white'>Edit Node</a>
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
                            {!! Form::open(['action'=> ['gejalaController@updateNode',$gj->id], 'method' => 'POST'])!!}
                            <div class="modal-body">
                                <div class="form-group row">
                                    {{Form::label('Ya','Ya',['class'=>'col-sm-2 col-form-label'])}}
                                    {{Form::select('ya', $allGjl->pluck('pertanyaan','id')->toArray(),$gj->ya ? $gj->ya :null,['class' => 'btn btn-secondary dropdown-toggle'], ['placeholder' => 'Pick a size...'])}}
                                </div>
                                <div class="form-group row">
                                    {{Form::label('Tidak','Tidak',['class'=>'col-sm-2 col-form-label'])}}
                                    {{Form::select('tidak', $allGjl->pluck('pertanyaan','id')->toArray(), $gj->tidak ? $gj->tidak :null,['class' => 'btn btn-secondary dropdown-toggle'], ['placeholder' => 'Pick a size...'])}}
                                </div>
                            </div>
                            <div class="modal-footer">
                                {{Form::submit('Batal',['class'=>'btn btn-secondary','data-dismiss'=>'modal'])}}
                                {{Form::submit('Ubah Node',['class'=>'btn btn-primary'])}}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <a href="/gejala/{{$gj->id}}/edit" class='btn btn-primary btn-sm'>Edit</a>
                {!!Form::open(['action' =>['gejalaController@destroy',$gj->id], 'method' => 'POST','class'=>'float-left','style'=>'padding-right:5px;'])!!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Hapus',['class' => 'btn btn-danger btn-sm'])}}
                {!!Form::close()!!}
                {{-- <a href="/gejala/{{$gj->id}}/delete" class='btn btn-danger btn-sm'>Delete</a> --}}
            </td>
        </tr>
        @endforeach
    </table>
    
    {{$gejala->links()}}
    @else
    <p>Tidak Ada Data Gejala</p>
    @endif
    
    <a class="btn btn-danger" href="/gejala/create">Buat Data Gejala</a>
</div>

@endsection