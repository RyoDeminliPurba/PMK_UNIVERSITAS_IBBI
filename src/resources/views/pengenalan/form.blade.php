@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route("pengenalan.create") }}" method="POST">   
            @csrf
              <div class="form-group">
                  <label for="pengenalan">Pengenalan PMK</label>
                  <input type="text" class="form-control" name="pengenalan"
                  value={{old('pengenalan') }}>
                
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