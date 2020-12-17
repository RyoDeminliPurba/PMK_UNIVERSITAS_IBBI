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
        <form action="{{ route("nama.create") }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="Nama">Nama</label>
                <input type="text" 
                    class="form-control" 
                    name="nama"
                    value="">
                <div class="form-group">
                    <div class="form-group">
                        <label for="JENISKELAMIN">JENISKELAMIN</label>
                        <input type="text"name="JENISKELAMIN"class="form-control"placeholder="isi jenis kelamin p atau l"maxlength="1"
                        value={{isset($data)?$data->JENISKELAMIN:""}}>
                    </div>
                    
                    </div>           
            <div class="form-group row">
                <label for="example-date-input" class="col-6 col-form-label">Tanggal Lahir</label>
                <div class="col-10">
                  <input class="form-control" type="date" id="example-date-input" name="tanggallahir">
                </div>
              </div>
              <div class="form-group">
                  <label for="tahunangkatan">Tahun Angkatan</label>
                  <input type="text" class="form-control" name="TAHUNANGKATAN">
                </div>
              <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select name="JURUSAN" class="form-control" id="">
                    <option value="TEKNIKINFORMATIKA">TEKNIK INFORMATIKA</option>
                    <option value="SISTEMINFORMASI">SISTEM INFORMASI</option>
                    <option value="AKUTANSI">AKUNTANSI</option>
                    <option value="MANAJEMEN">MANAJEMEN</option>
                </select>
                </div>           
                    <div class="form-group float-right">
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-save"></i> Simpan</button>
                        <a href="{{ url()->previous() }}" class="btn btn-danger"><i class="fas fa-undo"></i> Batal </a>
                    </div>
                </div>
        </form>
    </div>
    <hr>
    <div class="container-fluid">
            <table class="table table-bordered">
                <thead align="center" class="bg bg-danger text-white">
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Jurusan</th>
                    <th>Angkatan</th>
                    <th colspan="2">Action</th>
                </thead>
                <tbody align="center">
                    @foreach ($nama as $item)
                <tr>
                    <td>{{ $item -> Nama }}</td>
                    <td>{{ $item -> JENISKELAMIN }}</td>
                    <td>{{ $item -> tgllahir}}</td>
                    <td>{{ $item -> JURUSAN}}</td>
                    <td>{{ $item -> TAHUNANGKATAN}}</td>
                    <td><a href="{{ url()->previous()}}"Rubah" class="btn btn-warning"><i class="fas fa-trash"></i>Rubah</a></td>
                    <td><a href="{{ route("hapus.nama",["id" => $item->id]) }}" 
                        onclick="return confirm('Anda Yakin Hapus')"    
                        class="btn btn-danger"><i class="fas fa-undo"></i>Hapus</a></td>
                </tr>
                @endforeach        
                </tbody>
                
            </table>
            
    </div>
@endsection