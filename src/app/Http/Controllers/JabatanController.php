<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JabatanController extends Controller
{
    //
    public function jabatan(Request $request){
        Pengenalan::create([
            "jabatan" => \Auth()->id(),
            "jabatan" => $request->jabatan
        ]);

        return redirect()->route("home");
}
