<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\gejala;
use App\penyakit;
use DB;
use Auth;

class gejalaController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $gejala = gejala::with('penyakit')->paginate(20);
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
                        $ya = $request->input('ya');
                        $tidak = $request->input('tidak');
                        if($ya==0){
                            $ya=null;
                        }
                        if($tidak==0){
                            $tidak=null;
                        }  
                        $gejala = gejala::find($id);
                        
                        $gejala->ya = $ya;
                        $gejala->tidak = $tidak;
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
                        return redirect('/gejala')->with('success','Data Gejala Telah Dihapus. Harap Periksa Kembali Node Diagnosa');
                    }
                    
                    public function diagnosa(){
                        $gejala=gejala::where('posisi',1)->first();
                        if(auth::user()!=null){
                            return view('diagnosa.diagnosa')->with('gejala',$gejala);
                        }else{
                            return view('diagnosa.diagnosaGuest')->with('gejala',$gejala);
                        }
                    }
                    
                    public function node(Request $request,$id){
                        $node=strtolower($request->input('submit'));
                        if($node=='ya'){
                            $nodeSelanjutnya=gejala::where('id',$id)->get();
                            $nd=$nodeSelanjutnya[0]->ya;
                            if(!is_null($nd)){
                                $gejala=gejala::where('id',$nd)->get();
                                if(auth::user()!=null){
                                    return view('diagnosa.diagnosa')->with('gejala',$gejala[0]);
                                }else{
                                    return view('diagnosa.diagnosaGuest')->with('gejala',$gejala[0]);
                                }
                            } else{
                                $p=penyakit::where('id',$nodeSelanjutnya[0]->id_penyakit)->get();
                                $penyakit=$p[0];
                                if(auth::user()!=null){
                                    return view('diagnosa.HasilDiagnosa')->with('penyakit',$penyakit);
                                }else{
                                    return view('diagnosa.hasilDiagnosaGuest')->with('penyakit',$penyakit);
                                }
                                
                            }
                            
                        }else{
                            $nodeSelanjutnya=gejala::select('tidak')->where('id',$id)->get();
                            $nd=$nodeSelanjutnya[0]->tidak;
                            if(!is_null($nd)){
                                $gejala=gejala::where('id',$nd)->get();
                                if(auth::user()!=null){
                                    return view('diagnosa.diagnosa')->with('gejala',$gejala[0]);
                                }else{
                                    return view('diagnosa.diagnosaGuest')->with('gejala',$gejala[0]);
                                }
                            } else{
                                return view('diagnosa.diagnosa');
                            }
                        }
                    }
                }
                