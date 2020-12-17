<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Nama;

class NamaController extends Controller
{
    public function index(){
        return view('nama',[
            "nama" =>Nama::all()
        ]);
    }
    //
    public function tampilform(){
        $Nama = Nama::all();
        return view("formnama",compact("Nama"));
    }
    public function createform(Request $request){
        Nama::create([
        "nama" => $request->nama,
            "JENIS KELAMIN" =>$request->jeniskelamin,
            "JURUSAN"=>$request->JURUSAN,
            "TAHUNANGKATAN"=>$request->TAHUNANGKATAN,
            "tgllahir" =>$request->tanggallahir
        ]);
            return view("formnama");   
    }
    public function hapus($id){

        \App\Models\Nama::destroy($id);
        return redirect()->back();
    }
}
