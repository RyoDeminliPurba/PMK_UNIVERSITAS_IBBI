<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home',["pengenalan" => \App\Models\Pengenalan::all()]);
    }
            public function HapusHome($id){
            //hapus data home berdasarkan $id
            App\Models\Home::destroy($id);

        //setelah berhasil di hapus data home kembali ke halaman sebelumnnya
            return view("home");
            }
 }
