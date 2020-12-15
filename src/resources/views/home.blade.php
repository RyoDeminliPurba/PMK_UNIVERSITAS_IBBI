@extends('layouts.app')

@section('content')
    <div class="container">
     <a href="{{ route("nama.form") }}" class="btn btn-success float-right mb-4"><i class="fas fa-plus"></i> Buat Daftar Baru</a>
        <div class="clearfix"></div>
    
        <div class="row">
            <div class="col-md-4">
                <div class="card-header bg-primary text-white">
               <center> <h5>PMK UNIVERSITAS IBBI</H5></center>
                </div>
                    <div class="card-body">
                    Situs website PMK IBBI dapat membantu menyimpan biodata kepengurusan organisasi PMK UNIVERSITAS IBBI
                    </div>
                        <div class="card-footer">     
                        <a href="Hapus"class ="btn btn-danger float-right"><i class="fas fa-trash"></i>Hapus</a>
                        </div>
            </div>

            <div class="col-md-4">
                <div class="card-header bg-primary text-white">
                <center><h5>PMK UNIVERSITAS IBBI</H5></center>
                </div>
                    <div class="card-body">
                    Dan melalui situs ini juga dapat menyimpan ataupun sebagai sarana penyimpanan kegiatan PMK UNIVERSITAS IBBI
                    </div>
                        <div class="card-footer">     
                        <a href="Hapus"class ="btn btn-danger float-right"><i class="fas fa-trash"></i>Hapus</a>
                        </div>
            </div>
            <div class="col-md-4">
                <div class="card-header bg-primary text-white">
                <center><h5>PMK UNIVERSITAS IBBI</H5></center>
                </div>
                    <div class="card-body">
                     Situs website ini juga bertujuan mempermudah pengurus Organisasi IBBI dalam pengisian biodata
                    </div>
                        <div class="card-footer">     
                        <a href="Hapus"class ="btn btn-danger float-right"><i class="fas fa-trash"></i>Hapus</a>
                        </div>
            </div>
            <div class="col-md-4">
                <div class="card-header bg-primary text-white">
                <center><h5>PMK UNIVERSITAS IBBI</H5></center>
                </div>
                    <div class="card-body">
                    Melalui situs website ini di harapkan dapat mempermudah kegiatan organisasi PMK UNIVERSITAS IBBI
                    </div>
                        <div class="card-footer">     
                        <a href=""class ="btn btn-danger float-right"><i class="fas fa-trash"></i>Hapus</a>
                        </div>
            </div>
        </div>
           
@endsection