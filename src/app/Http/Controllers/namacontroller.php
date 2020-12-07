<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class namacontroller extends Controller
{
    //
    public function tampilform(){
        return view("nama.form");
    }
}
