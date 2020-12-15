<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Nama;

class NamaController extends Controller
{
    //
    public function tampilform(){
        $Nama = Nama::all();
        return view("nama.form",compact("Nama"));
    }
    public function createform(Request $request){
        \App\Models\Nama::create([
        "nama" => $request->nama,
            "JENIS KELAMIN" =>$request->jeniskelamin,
            "JURUSAN"=>$request->JURUSAN,
            "TAHUNANGKATAN"=>$request->TAHUNANGKATAN,
            "tgllahir" =>$request->tanggallahir
        ]);
            return view("home");   
    }
}
