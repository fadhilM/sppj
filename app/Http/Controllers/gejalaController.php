<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\gejala;
use App\penyakit;
use DB;

class gejalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gejala = gejala::with('penyakit')->paginate(10);
        return view('gejala.index')->with('gejala',$gejala);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penyakit = penyakit::all();
        return view('gejala.buat')->with('penyakit',$penyakit);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'pertanyaan' => 'required',
            'posisi' => 'required'
            ]);
            //update
            $gejala = new gejala;
            $gejala->pertanyaan = $request->input('pertanyaan');
            $gejala->posisi = $request->input('posisi');
            $gejala->id_penyakit = $request->input('id_penyakit');
            $gejala->save();
            
            return redirect('/gejala')->with('success','Data Gejala Telah Dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gejala = gejala::find($id);
        $penyakit = penyakit::all();
        return view('gejala.edit',[
            'gejala'=> $gejala,
            'penyakit'=> $penyakit,

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
                'namaPenyakit' => 'required',
                'deskripsi' => 'required'
                ]);
                //update
                $pakar = penyakit::find($id);
                $pakar->namaPenyakit = $request->input('namaPenyakit');
                $pakar->deskripsi = $request->input('deskripsi');
                $pakar->save();
                
                return redirect('/penyakit')->with('success','Data Penyakit Telah Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
