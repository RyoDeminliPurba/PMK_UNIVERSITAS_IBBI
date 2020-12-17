@extends('layouts.app')

@section('content')
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-primary mb-4">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link text-white" href="home">BERANDA <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="formnama">NAMA PENGURUS</a>
                  </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="tentang">JABATAN</a>
                  </li>
                    
                <li class="nav-item">
                  <a class="nav-link text-white" href="tentang">KEGIATAN</a>
                </li>
              </ul>
            </div>
        </nav>
    </div>
    <div class="container">
     <a href="{{ route("pengenalan.form") }}" class="btn btn-success float-right mb-4">
      <i class="fas fa-plus"></i> Buat Pengenalan PMK</a>
        <div class="clearfix"></div>                
        <div class="row">
          @foreach ($pengenalan as $item)
          <div class="col-md-4">
            <div class="card mt-2">
                <div class="card-header bg-success text-white">
                    <h5>PENGENALAN PMK</h5>
                    <p>UNIVERSITAS IBBI</p>
                </div>
                <div class="card-body">
                    {{ $item->pengenalan }}
                </div>
                
                <div class="card-footer">
                        <a href="{{ route("pengenalan.hapus",["id" => $item->id]) }}" class="btn btn-danger float-right" onclick="return confirm('Anda Yakin Hapus?')"><i class="fas fa-trash"></i></a>
                </div>
            </div>
        </div>  
          @endforeach
    </div>
@endsection