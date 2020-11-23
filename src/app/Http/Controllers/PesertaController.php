<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesertaController extends Controller
{
    //
    Public function tampil_form_email(){
        return view('user.email');
    }
    Public function tampil_form_detail(){
        return view('user.detail');
    }
}