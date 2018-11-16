<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\penyakit;
use DB;
use Auth;

class penyakitController extends Controller
{
    /**
    * Display a listing of the resource.
    * 
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $penyakit =  penyakit::paginate(10);
        if(auth::user()!=null){
            return view('penyakit.index')->with('penyakit',$penyakit);
        } else{
            return view('penyakit.indexGuest')->with('penyakit',$penyakit);
        }
    }
    
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('penyakit.buat');
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
            'namaPenyakit' => 'required',
            'deskripsi' => 'required'
            ]);
            //update
            $pakar = new penyakit;
            $pakar->namaPenyakit = $request->input('namaPenyakit');
            $pakar->deskripsi = $request->input('deskripsi');
            $pakar->save();
            
            return redirect('/penyakit')->with('success','Data Penyakit Telah Dibuat');
        }
        
        /**
        * Display the specified resource.
        *
        * @param  int  $id
        * @return \Illuminate\Http\Response
        */
        public function show($id)
        {
            $penyakit = penyakit::find($id);
            if(auth::user()!=null){
                return view('penyakit.lihat')->with('penyakit',$penyakit);
            } else{
                return view('penyakit.lihatGuest')->with('penyakit',$penyakit);
            }
            
        }
        
        /**
        * Show the form for editing the specified resource.
        *
        * @param  int  $id
        * @return \Illuminate\Http\Response
        */
        public function edit($id)
        {
            $penyakit = penyakit::find($id);
            return view('penyakit.edit')->with('penyakit',$penyakit);
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
                $penyakit = penyakit::find($id);
                $penyakit->delete();
                return redirect('/penyakit')->with('success','Data Penyakit Telah Dihapus,  Harap Periksa kKembali Struktur Node Pada Gejala Penyakit');
            }
            
            public function search(Request $request){
                $search = $request->get('search');
                $penyakit = penyakit::where('namaPenyakit','like','%'.$search.'%')->paginate(10);
               
                
                if(auth::user()!=null){
                    return view('penyakit.index')->with('penyakit',$penyakit);
                }else{
                    return view('penyakit.indexGuest')->with('penyakit',$penyakit);
                }
            }
        }
        