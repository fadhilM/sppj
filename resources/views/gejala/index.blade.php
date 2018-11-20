@extends('layouts.app')
{{-- @section('sidebar')
@include('inc.sidebar')
@endsection  --}}

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card striped-tabled-with-hover">
            <div class="card-header">
                <h2 class="card-title text-center">Data Gejala</h2>
            </div>
            <div class="card-body table-responsive">
                @if (count($gejala) > 0)
                <table class="table table-hover table-striped" style="width: 100%">
                    <thead class="">
                        <tr>
                            <tr>
                                <th>ID</th>
                                <th>Pertanyaan</th>
                                <th>Ya</th>
                                <th>Tidak</th>
                                <th>Posisi</th> 
                                <th>Nama Penyakit</th>
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
                            @if(Auth::user()->level==1)
                            <td>
                                &nbsp<a data-toggle="modal" data-target="#editNode{{$gj->id}}"  class='btn btn-success btn-sm text-white'>Edit Node</a>
                                &nbsp&nbsp<a href="/gejala/{{$gj->id}}/edit" class='btn btn-primary btn-sm text-white'>Edit</a>
                                &nbsp<a data-toggle="modal" data-target="#deleteNode{{$gj->id}}"  class='btn btn-danger btn-sm text-white'>Hapus</a>
                                {{-- <a href="/gejala/{{$gj->id}}/delete" class='btn btn-danger btn-sm'>Delete</a> --}}
                            </td>
                            @endif
                        </tr>
                        <!-- Modal -->
                        <div class="modal fade" id="editNode{{$gj->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Node</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    {!! Form::open(['action'=> ['gejalaController@updateNode',$gj->id], 'method' => 'POST'])!!}
                                    <div class="modal-body">
                                        {!! Form::hidden('id','', array('id' => 'id')) !!}
                                        <div class="form-group row">
                                            {{Form::label('Ya','Ya',['class'=>'col-sm-2 col-form-label'])}}
                                            {{Form::select('ya', $allGjl->pluck('pertanyaan','id')->prepend(null,"")->toArray(), $gj->ya ? $gj->ya :'Pilih Pertanyaan Selanjutnya',['class' => 'btn btn-secondary dropdown-toggle'])}}
                                        </div>
                                        <div class="form-group row">
                                            {{Form::label('Tidak','Tidak',['class'=>'col-sm-2 col-form-label'])}}
                                            {{Form::select('tidak', $allGjl->pluck('pertanyaan','id')->prepend(null,"")->toArray(), $gj->tidak ? $gj->tidak :'Pilih Pertanyaan Selanjutnya',['class' => 'btn btn-secondary dropdown-toggle'])}}
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
                        
                        <!-- Modal -->
                        <div class="modal fade" id="deleteNode{{$gj->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Perhatian</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Menghapus data gejala dapat menimbulkan kerusakan pada node diagnosa penyakit, apakah anda yakin ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                        {!!Form::open(['action' =>['gejalaController@destroy',$gj->id], 'method' => 'POST','class'=>'float-left','style'=>'padding-right:5px;'])!!}
                                        {{Form::hidden('_method','DELETE')}}
                                        {{Form::submit('Ya, Saya Yakin',['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        @endforeach
                    </table>
                </div>
                {{$gejala->links()}}
                @else
                <p>Tidak Ada Data Gejala</p>
                @endif
            </div>
        </div>
        <a class="btn btn-danger" href="/gejala/create">Buat Data Gejala</a>
    </div>
@endsection