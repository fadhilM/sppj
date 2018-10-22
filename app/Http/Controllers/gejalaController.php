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
        $gejala = gejala::with('penyakit')->paginate(5);
        $allGjl = gejala::all();
        return view('gejala.index',['allGjl'=>$allGjl])->with('gejala',$gejala);
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
                    'pertanyaan' => 'required',
                    'posisi' => 'required',
                    'id_penyakit' =>'required'
                    ]);
                    //update
                    $gejala = gejala::find($id);
                    $gejala->pertanyaan = $request->input('pertanyaan');
                    $gejala->posisi = $request->input('posisi');
                    $gejala->id_penyakit = $request->input('id_penyakit');
                    $gejala->save();
                    
                    return redirect('/gejala')->with('success','Data Gejala Telah Diubah');
                }
                
                public function updateNode(Request $request, $id)
                {
                    $this->validate($request,[
                        'ya' => 'required',
                        'tidak' => 'required',
                        ]);
                        //update
                        $gejala = gejala::find($id);
                        $gejala->ya = $request->input('ya');
                        $gejala->tidak = $request->input('tidak');
                        $gejala->save();
                        
                        return redirect('/gejala')->with('success','Data Gejala Telah Diubah');
                    }
                    
                    
                    
                    /**
                    * Remove the specified resource from storage.
                    *
                    * @param  int  $id
                    * @return \Illuminate\Http\Response
                    */
                    public function destroy($id)
                    {
                        $gejala = gejala::find($id);
                        $gejala->delete();
                        return redirect('/gejala')->with('success','Data Gejala Telah Dihapus');
                    }
                    
                    public function diagnosa(){
                        $gejala=gejala::where('posisi',1)->first();
                        return view('diagnosa.diagnosa')->with('gejala',$gejala);
                    }
                    
                    public function node(Request $request,$id){
                        $node=strtolower($request->input('submit'));
                        if($node=='ya'){
                            $nodeSelanjutnya=gejala::where('id',$id)->get();
                            $nd=$nodeSelanjutnya[0]->ya;
                            if(!is_null($nd)){
                                $gejala=gejala::where('id',$nd)->get();
                                return view('diagnosa.diagnosa')->with('gejala',$gejala[0]);
                            } else{
                                $p=penyakit::where('id',$nodeSelanjutnya[0]->id_penyakit)->get();
                                $penyakit=$p[0];
                                return view('diagnosa.HasilDiagnosa')->with('penyakit',$penyakit);
                            }
                            
                        }else{
                            $nodeSelanjutnya=gejala::select('tidak')->where('id',$id)->get();
                            $nd=$nodeSelanjutnya[0]->tidak;
                            if(!is_null($nd)){
                                $gejala=gejala::where('id',$nd)->get();
                                return view('diagnosa.diagnosa')->with('gejala',$gejala[0]);
                            } else{
                                return view('diagnosa.diagnosa');
                                die();
                            }
                        }
                    }
                }
                