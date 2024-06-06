@extends('layout.main')

@section('title',' Tambah Mahasiswa')

@section('content')

<div class="row"

   <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Mahasiswa</h4>
                  <p class="card-description">
                    Formulir tambah mahasiswa
                  </p>
                  <form method="POST" action= "{{ route('mahasiswa.store') }}" 
                  class="forms-sample" enctype="multipart/form-data">
                    <div class="form-sample">
                        @csrf
                    <div class="form-group">
                      <label for="nama">Nama Mahasiswa</label>
                      <input type="text" class="form-control" name="nama" value="{{old('nama')}}" placeholder="Nama Mahasiswa">
                      @error('nama')
                          <span class="text-danger">{{$message}} </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="npm">NPM</label>
                      <input type="text" class="form-control" name="npm" placeholder="2226240..">
                    </div>
                    @error('npm')
                         <span class="text danger"> {{ $message}}</span>
                    @enderror
                    <div class="form-group">
                      <label for="tempat_lahir">Tempat Lahir</label>
                      <input type="text" class="form-control" name="tempat lahir" placeholder="Nama Kota">
                    </div>
                    @error('tempat_lahir')
                         <span class="text danger"> {{ $message}}</span>
                    @enderror
                    <div class="form-group">
                      <label for="tanggal_lahir">Tanggal Lahir</label>
                      <input type="text" class="form-control" name="tanggal_lahir" placeholder="dd/mm/yyyy">
                    </div>
                    @error('tanggal_lahir')
                         <span class="text danger"> {{ $message}}</span>
                    @enderror
                     <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <input type="text" class="form-control" name="alamat" placeholder="JL..">
                    </div>
                    @error('alamat')
                         <span class="text danger"> {{ $message}}</span>
                    @enderror
                      <div class="form-group">
                      <label for="prodi_id">Prodi</label>
                      <input type="text" class="form-control" name="prodi_id" placeholder="SI,TE,IG,MJ..">
                    </div>
                    @error('prodi_id')
                         <span class="text danger"> {{ $message}}</span>
                    @enderror
                    <div class="form-group">
                      <label for="url_foto">Foto</label>
                      <input type="file" class="form-control" name="url_foto" placeholder="link foto">
                    </div>
                    @error('url_foto')
                        <span class="text danger"> {{ $message}}</span>
                    @enderror
                    
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{ url('fakultas')}}" class="btn btn-light">Batal</a>
                  </form>
                </div>
              </div>

</div>
@endsection
 