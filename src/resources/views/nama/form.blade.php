@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route("nama.create") }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="Nama">Nama</label>
                <input type="text" 
                    class="form-control @error('nama') is-invalid @enderror" 
                    name="nama"
                    value={{ old('nama')}}>
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>  
                @enderror
                <div class="form-group">
                   <div class="form-group">
                     <label for="jeniskelamin">Jenis Kelamin</label>
                    <input type="text" name="jeniskelamin" class="form-control" placeholder="isi jenis kelamin p atau l" maxlength="1"
                        value={{  isset($data)?$data->jeniskelamin:""}}>
                        </div>
                    <div class="invalid-feedback">
                        {{ $message }}
                        </div>
                        @enderror
                    </div>           
            <div class="form-group row">
                <label for="example-date-input" class="col-6 col-form-label">Tanggal Lahir</label>
                <div class="col-10">
                  <input class="form-control" type="date" id="example-date-input" name="tanggallahir">
                </div>
                @error('tanggallahir')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>  
                @enderror
              </div>
              <div class="form-group">
                  <label for="tahunangkatan">Tahun Angkatan</label>
                  <input type="text" class="form-control" name="TAHUNANGKATAN">
              </div>
              <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select name="JURUSAN" class="form-control" id="">
                    <option value="" selected>Masukkan Jurusan</option>
                    <option value="1">TEKNIK INFORMATIKA</option>
                    <option value="2">SISTEM INFORMASI</option>
                    <option value="3">AKUNTANSI</option>
                    <option value="4">MANAJEMEN</option>
                </select>
                @error('JURUSAN')
                <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                    @enderror
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
                    @foreach ($Nama as $item)
                <tr>
                    <td>{{ $item -> Nama}}</td>
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