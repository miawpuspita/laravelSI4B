@extends('layout.main')

@section('title', 'Mahasiswa')
    
@section('content')
    <h1>UMDP</h1>
    <h2>Fakultas</h2>
    <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Mahasiswa</h4>
                  <p class="card-description">
                    List Data Mahasiswa
                     <a href="{{route('mahasiswa.create')}}" class="btn btn-rounded btn-primary">Tambah</a>
                  </p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>NPM</th>
                          <th>Nama Mahasiswa</th>
                          <th>Tempat Lahir</th>
                          <th>Tanggal Lahir</th>
                          <th>Alamat</th>
                          <th>Prodi</th>
                          <th>URL Foto</th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach ($mahasiswa as $value)
                            <tr> 
                                <td>{{ $value["nama"] }}</td>
                                <td>{{ $value["NPM"] }} </td>
                                 <td>{{ $value[""] }} </td>
                            </tr>
                        @endforeach 
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
              Swal.fire({
                title: "Good job!",
                text: "You clicked the button!",
               icon: "success"
              });
            </script>

@endsection