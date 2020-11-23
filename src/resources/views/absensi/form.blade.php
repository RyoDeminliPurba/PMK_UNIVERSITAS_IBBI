@extends('layouts.app')
@section('content')
    <div class="container">
            <div class="form-group">
                <h1>Halaman Absensi</h1>
                <hr>
                <span>Link Absensi <a href="">XxX</a></span>
                <div class="form-group">
                    <label for="pertemuan">Pertemuan</label>
                    <input type="text" name="pertemuan" class="form-control">
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control">
                </div>
                <div class="form-group">
                    <label for="materi">Materi</label>
                    <textarea name="" class="form-control" cols="30" rows="10"></textarea>
                </div>
            </div>
    </div>
@endsection