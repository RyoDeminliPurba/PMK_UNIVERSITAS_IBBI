<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Nama;

class NamaController extends Controller
{
    //
    public function tampilform(){
        return view("nama.form");
    }
    public function createform(Request $request){
        \App\Models\Nama::create([
        "nama" => $request->nama,
            "JENIS KELAMIN" =>$request->jeniskelamin,
            "tgllahir" =>$request->tanggallahir
        ]);
            return view("home");   
    }
}
