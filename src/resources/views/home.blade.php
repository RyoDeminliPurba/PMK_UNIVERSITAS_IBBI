@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route("nama.form") }}" class="btn btn-success float-right mb-4"><i class="fas fa-plus"></i> Buat Daftar Baru</a>
        <div class="clearfix"></div>

    <div class="row">
     <div class="col-md-3 ">
     <div class="card">
        <div class="card-header"></div>
        <div class="card-header bg-primary text-white">
        <h5>PMK UNIVERSITAS IBBI</H5>
     </div>
     <div class="card-body">
     PMK adalah salah satu organisasi yang ada di UNIVERSITAS IBBI Medan dimana organisasi ini bertujuan atau bergerak di bidang kerohanian
     Kristen.     </div>
     
     <div class="card-footer">
     
        <a href="#"class ="btn-danger float-right"><i class="fas fa-trash"></i>Hapus</a>
        
     <div>
    
     </div>
     

@endsection
