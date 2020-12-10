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
            <div class="form-group">
                <label for="tanggallahir">tanggallahir</label>
                <input type="text" name="tanggallahir" 
                    class="form-control @error('tanggallahir') is-invalid @enderror"
                    value={{ old('tanggallahir') }}>
                @error('noruang')
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