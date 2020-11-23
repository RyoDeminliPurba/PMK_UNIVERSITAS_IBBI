@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Detail Peserta</h1>
        <hr>
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-control" name="name" id="">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="">
            </div>
            <div class="form-grup d-flex justify-content-between">
                <a href="{{url()->previous()}}" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Kembali</a>
                <button type="submit" class="btn btn-success"><i class="fas fa-user-plus"></i> Undang</button>
            </div>
    </div>
@endsection
