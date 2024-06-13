@extends('layout.main')

@section('title', 'Prodi')
    
@section('content')
    <h1>UMDP</h1>
    <h2>Prodi</h2>
    <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Prodi</h4>
                  <p class="card-description">
                    List Data Prodi
                    <a href="{{route('prodi.create')}}" class="btn btn-rounded btn-primary">Tambah</a>
                  </p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Nama Program Studi</th>
                          <th>Singkatan</th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach ($prodi as $value)
                            <tr> 
                                <td>{{ $value["Nama Program Studi"] }}</td>
                                <td>{{ $value["singkatan"] }} </td>
                                <td>
                                  {{ $value["fakultas"]["nama"]}}
                                </td>
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
