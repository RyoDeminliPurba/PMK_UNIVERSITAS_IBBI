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
                <label for="JABATAN">Jurusan</label>
                <select name="JABATAN" class="form-control" id="">
                    <option value="" selected>Masukkan Jurusan</option>
                    <option value="1">KETUA</option>
                    <option value="2">WAKIL</option>
                    <option value="3">BENDAHARA</option>
                    <option value="4">SEKRETARIS</option>
                    <option value="5">ACARA</option>
                    <option value="6">KEROHANIAN</option>
                    <option value="7">HUMAS</option>
                    <option value="8">MULTIMEDIA</option>
                </select>
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
                    <th>Jurusan</th>
                    <th>Jabatan</th>
                    <th colspan="2">Action</th>
                </thead>
                <tbody align="center">
                    @foreach ($Nama as $item)
                <tr>
                    <td>{{ $item -> Nama }}</td>
                    <td>{{ $item -> JURUSAN}}</td>
                    <td>{{ $item -> JABATAN}}</td>
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