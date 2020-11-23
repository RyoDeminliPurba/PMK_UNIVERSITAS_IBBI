@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="">
            <div class="form-group">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#pertemuan">Pertemuan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#peserta">Peserta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  data-toggle="tab" href="#absensi">Absensi</a>
                    </li>
                </ul>
                <div class="jumbotron bg-primary text-white">
                    <h1>Nama Kelas</h1>
                    <h5>No Rouang XXX</h5>
                    <h5>Kode Kelas :XXX</h5>
                </div>
                <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" role="tabpanel" id="pertemuan">
                        <a href="{{route('pertemuan.form')}}" class="btn btn-outline-primary fas fa-plus float-right mb-4"> Buat Pertemuan</a>
                        <div class="clearfix"></div>
                        <div class="card mt-3">
                            <div class="card-body">
                                <h3><a href="{{route('absensi.form')}}">Pertemuan1</a></h3>
                                <span class="text-muted">Tanggal 01/01/2020</span>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    Quis modi cum odio, tenetur culpa, esse facilis, 
                                    obcaecati nulla repellendus expedita fuga dolores ullam animi numquam accusantium ipsam magnam 
                                    suscipit soluta!</p>
                            </div>
                            <div class="card-footer">
                                <a href="" class="btn btn-danger float-right"><i class="fas fa-trash"> Hapus</i></a>
                            </div>
                        </div>
                        <hr>
                        <div class="card mt-3">
                            <div class="card-body">
                                <h3><a href="{{route('absensi.form')}}">Pertemuan1</a></h3>
                                <span class="text-muted">Tanggal 01/01/2020</span>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    Quis modi cum odio, tenetur culpa, esse facilis, 
                                    obcaecati nulla repellendus expedita fuga dolores ullam animi numquam accusantium ipsam magnam 
                                    suscipit soluta!</p>
                            </div>
                            <div class="card-footer">
                                <a href="" class="btn btn-danger float-right"><i class="fas fa-trash"> Hapus</i></a>
                            </div>
                        </div>
                        <hr>
                        <div class="card mt-3">
                            <div class="card-body">
                                <h3><a href="{{route('absensi.form')}}">Pertemuan1</a></h3>
                                <span class="text-muted">Tanggal 01/01/2020</span>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    Quis modi cum odio, tenetur culpa, esse facilis, 
                                    obcaecati nulla repellendus expedita fuga dolores ullam animi numquam accusantium ipsam magnam 
                                    suscipit soluta!</p>
                            </div>
                            <div class="card-footer">
                                <a href="" class="btn btn-danger float-right"><i class="fas fa-trash"> Hapus</i></a>
                            </div>
                        </div>
                        <hr>
                        <div class="card mt-3">
                            <div class="card-body">
                                <h3><a href="{{route('absensi.form')}}">Pertemuan1</a></h3>
                                <span class="text-muted">Tanggal 01/01/2020</span>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    Quis modi cum odio, tenetur culpa, esse facilis, 
                                    obcaecati nulla repellendus expedita fuga dolores ullam animi numquam accusantium ipsam magnam 
                                    suscipit soluta!</p>
                            </div>
                            <div class="card-footer">
                                <a href="" class="btn btn-danger float-right"><i class="fas fa-trash"> Hapus</i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" role="tabpanel" id="peserta" >
                        <h2 class="text-primary">Dosen</h2>
                        <ul class="list-group">
                            <li class="list-group-item">Nama Dosen</li>
                        </ul>
                        <div class="d-flex justify-content-between mt-2">
                        <h2 class="text-primary">Mahasiswa</h2>
                        <div>
                            <span class="text-muted">20 Mahasiswa</span> 
                            <a href="{{ route('peserta.invite') }}" class="btn btn-outline-primary"><i class="fas fa-user-plus"></i></a>
                        </div>
                        </div>
                        <hr>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between mt-2">
                            <a href="{{ route("peserta.detail")}}">Mahasiswa 1</a>
                            <a href="" class="btn btn-danger float-right"><i class="fas fa-trash"></i></a>
                            </li>
                        </ul>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between mt-2">
                            <a href="{{ route("peserta.detail")}}">Mahasiswa 1</a>
                            <a href="" class="btn btn-danger float-right"><i class="fas fa-trash"></i></a>
                            </li>
                        </ul>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between mt-2">
                            <a href="{{ route("peserta.detail")}}">Mahasiswa 1</a>
                            <a href="" class="btn btn-danger float-right"><i class="fas fa-trash"></i></a>
                            </li>
                        </ul>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between mt-2">
                            <a href="{{ route("peserta.detail")}}">Mahasiswa 1</a>
                            <a href="" class="btn btn-danger float-right"><i class="fas fa-trash"></i></a>
                            </li>
                        </ul>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between mt-2">
                            <a href="{{ route("peserta.detail")}}">Mahasiswa 1</a>
                            <a href="" class="btn btn-danger float-right"><i class="fas fa-trash"></i></a>
                            </li>
                        </ul>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between mt-2">
                            <a href="{{ route("peserta.detail")}}">Mahasiswa 1</a>
                            <a href="" class="btn btn-danger float-right"><i class="fas fa-trash"></i></a>
                            </li>
                        </ul>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between mt-2">
                            <a href="{{ route("peserta.detail")}}">Mahasiswa 1</a>
                            <a href="" class="btn btn-danger float-right"><i class="fas fa-trash"></i></a>
                            </li>
                        </ul>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between mt-2">
                            <a href="{{ route("peserta.detail")}}">Mahasiswa 1</a>
                            <a href="" class="btn btn-danger float-right"><i class="fas fa-trash"></i></a>
                            </li>
                        </ul>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between mt-2">
                            <a href="{{ route("peserta.detail")}}">Mahasiswa 1</a>
                            <a href="" class="btn btn-danger float-right"><i class="fas fa-trash"></i></a>
                            </li>
                        </ul><ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between mt-2">
                            <a href="{{ route("peserta.detail")}}">Mahasiswa 1</a>
                            <a href="" class="btn btn-danger float-right"><i class="fas fa-trash"></i></a>
                            </li>
                        </ul>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between mt-2">
                            <a href="{{ route("peserta.detail")}}">Mahasiswa 1</a>
                            <a href="" class="btn btn-danger float-right"><i class="fas fa-trash"></i></a>
                            </li>
                        </ul>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between mt-2">
                            <a href="{{ route("peserta.detail")}}">Mahasiswa 1</a>
                            <a href="" class="btn btn-danger float-right"><i class="fas fa-trash"></i></a>
                            </li>
                        </ul><ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between mt-2">
                            <a href="{{ route("peserta.detail")}}">Mahasiswa 1</a>
                            <a href="" class="btn btn-danger float-right"><i class="fas fa-trash"></i></a>
                            </li>
                        </ul>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between mt-2">
                            <a href="{{ route("peserta.detail")}}">Mahasiswa 1</a>
                            <a href="" class="btn btn-danger float-right"><i class="fas fa-trash"></i></a>
                            </li>
                        </ul>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between mt-2">
                            <a href="{{ route("peserta.detail")}}">Mahasiswa 1</a>
                            <a href="" class="btn btn-danger float-right"><i class="fas fa-trash"></i></a>
                            </li>
                        </ul><ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between mt-2">
                            <a href="{{ route("peserta.detail")}}">Mahasiswa 1</a>
                            <a href="" class="btn btn-danger float-right"><i class="fas fa-trash"></i></a>
                            </li>
                        </ul>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between mt-2">
                            <a href="{{ route("peserta.detail")}}">Mahasiswa 1</a>
                            <a href="" class="btn btn-danger float-right"><i class="fas fa-trash"></i></a>
                            </li>
                        </ul>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between mt-2">
                            <a href="{{ route("peserta.detail")}}">Mahasiswa 1</a>
                            <a href="" class="btn btn-danger float-right"><i class="fas fa-trash"></i></a>
                            </li>
                        </ul><ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between mt-2">
                            <a href="{{ route("peserta.detail")}}">Mahasiswa 1</a>
                            <a href="" class="btn btn-danger float-right"><i class="fas fa-trash"></i></a>
                            </li>
                        </ul>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between mt-2">
                            <a href="{{ route("peserta.detail")}}">Mahasiswa 1</a>
                            <a href="" class="btn btn-danger float-right"><i class="fas fa-trash"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" role="tabpanel" id="absensi" >
                        <table class="table table-bordered">
                            <thead align="center">
                            <tr>
                                <td>Nama</td>
                                <td>Pertemuan 1</td>
                                <td>Pertemuan 2</td>
                                <td>Pertemuan 3</td>
                                <td>Pertemuan 4</td>
                                <td>Pertemuan 5</td>
                            </tr>
                            </thead>
                            <tbody align="center">
                             <tr>
                                 <td>Budi</td>
                                 <td>A</td>
                                 <td>I</td>
                                 <td>H</td>
                                 <td>H</td>
                                 <td>A</td>
                             </tr>
                             <tr>
                                 <td>Budi</td>
                                 <td>A</td>
                                 <td>I</td>
                                 <td>H</td>
                                 <td>H</td>
                                 <td>A</td>
                             </tr><tr>
                                 <td>Budi</td>
                                 <td>A</td>
                                 <td>I</td>
                                 <td>H</td>
                                 <td>H</td>
                                 <td>A</td>
                             </tr><tr>
                                 <td>Budi</td>
                                 <td>A</td>
                                 <td>I</td>
                                 <td>H</td>
                                 <td>H</td>
                                 <td>A</td>
                             </tr><tr>
                                 <td>Budi</td>
                                 <td>A</td>
                                 <td>I</td>
                                 <td>H</td>
                                 <td>H</td>
                                 <td>A</td>
                             </tr><tr>
                                 <td>Budi</td>
                                 <td>A</td>
                                 <td>I</td>
                                 <td>H</td>
                                 <td>H</td>
                                 <td>A</td>
                             </tr><tr>
                                 <td>Budi</td>
                                 <td>A</td>
                                 <td>I</td>
                                 <td>H</td>
                                 <td>H</td>
                                 <td>A</td>
                             </tr><tr>
                                 <td>Budi</td>
                                 <td>A</td>
                                 <td>I</td>
                                 <td>H</td>
                                 <td>H</td>
                                 <td>A</td>
                             </tr><tr>
                                 <td>Budi</td>
                                 <td>A</td>
                                 <td>I</td>
                                 <td>H</td>
                                 <td>H</td>
                                 <td>A</td>
                             </tr><tr>
                                 <td>Budi</td>
                                 <td>A</td>
                                 <td>I</td>
                                 <td>H</td>
                                 <td>H</td>
                                 <td>A</td>
                             </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection