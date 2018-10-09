<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

use DB;


class userController extends Controller
{
    public function index()
    {   
        $pakar = User::where('level',1)->paginate(10);
        return view('pakar.index')->with('pakar',$pakar);
    }
    
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('pakar.buat');
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
                'nama' => 'required|string|max:191|',
                'alamat' => 'required|string|max:30',
                'no_hp' => 'required|string|max:13',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6|confirmed',
            ]);
            $pakar = new User;
            $pakar->nama = $request->input('nama');
            $pakar->alamat = $request->input('alamat');
            $pakar->no_hp = $request->input('no_hp');
            $pakar->email = $request->input('email');
            $pakar->password =  Hash::make($request->input('password'));
            $pakar->save();
            
            return redirect('/pakar')->with('success','Akun Pakar Berhasil');
        }
        
        /**
        * Display the specified resource.
        *
        * @param  int  $id
        * @return \Illuminate\Http\Response
        */
        public function show($id)
        {
            $pakar = Post::find($id);
            return view('posts.show')->with('post',$post);
        }
        
        /**
        * Show the form for editing the specified resource.
        *
        * @param  int  $id
        * @return \Illuminate\Http\Response
        */
        public function edit($id)
        {
            $pakar = User::find($id);
            return view('pakar.edit')->with('pakar',$pakar);
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
                'nama' => 'required',
                'alamat' => 'required',
                'no_hp' => 'required',
                'email' => 'required'
                ]);
                //update
                $pakar = User::find($id);
                $pakar->nama = $request->input('nama');
                $pakar->alamat = $request->input('alamat');
                $pakar->no_hp = $request->input('no_hp');
                $pakar->email = $request->input('email');
                $pakar->save();
                
                return redirect('/pakar')->with('success','Data Berhasil Diubah');
            }
            
        public function lihatProfil(){
            return view('pakar.profil');
        }    
}
