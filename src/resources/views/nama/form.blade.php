@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route("nama.create") }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">nama</label>
                <input type="text" 
                    class="form-control @error('nama') is-invalid @enderror" 
                    name="nama"
                    value={{ old('nama')}}>
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>  
                @enderror
            </div>
            <div class="form-group">
                <label for="jeniskelamin">jeniskelamin</label>
                <input type="text" name="jeniskelamin" 
                    class="form-control @error('jeniskelamin') is-invalid @enderror"
                    value={{ old('jeniskelamin') }}>
                @error('jeniskelamin')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>  
                @enderror
            </div>
            <div class="form-group row">
            <label for="example-date-input" class="col-2 col-form-label">Tanggal lahir</label>
            <div class="col-2">
            <input type="dd/mm/yyy">
            </>
            </div>
                @error('tanggallahir')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>  
                @enderror
            </div>
            <div class="form-group">
                <label for="jurusan">jurusan</label>
                <input type="text" 
                    class="form-control @error('JURUSAN') is-invalid @enderror" 
                    name="JURUSAN"
                    value={{ old('JURUSAN')}}>
                @error('JURUSAN')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>  
                @enderror
            </div>
            <div class="form-group">
                <label for="tahun angkatan">tahun angkatan</label>
                <input type="text" name="TAHUN ANGKATAN" 
                    class="form-control @error('TAHUN ANGKATAN') is-invalid @enderror"
                    value={{ old('TAHUN ANGKATAN') }}>
                @error('TAHUN ANGKATAN')
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
        </form>
    </div>
@endsection