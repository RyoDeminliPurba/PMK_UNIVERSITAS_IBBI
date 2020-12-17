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
        <form action="{{ route("pengenalan.create") }}" method="POST">   
            @csrf
              <div class="form-group">
                  <label for="pengenalan">Pengenalan PMK</label>
                  <input type="text" class="form-control" name="pengenalan">
                </div>
                  
                    <div class="form-group float-right">
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-save"></i> Simpan</button>
                        <a href="{{ url()->previous() }}" class="btn btn-danger"><i class="fas fa-undo"></i> Batal </a>             
                     </div>
                </div>
        </form>
    </div>
    
@endsection