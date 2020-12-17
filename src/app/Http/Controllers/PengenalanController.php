<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Pengenalan;

class PengenalanController extends Controller
{
    //
    public function tampilform(){
        return view("pengenalan.form");
    }

    public function buatpengenalan(Request $request){
        Pengenalan::create([
            "kodenama" => \Auth()->id(),
            "pengenalan" => $request->pengenalan
        ]);

        return redirect()->route("home");
    }
    public function hapuspengenalan($id){
        Pengenalan::destroy($id);
        return redirect()->back();
    }
}

