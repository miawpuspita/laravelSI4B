@extends('layout.main')

@section('title', 'Fakultas')
    
@section('content')
    <h1>UMDP</h1>
    <h2>Fakultas</h2>
    <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Fakultas</h4>
                  <p class="card-description">
                    List Data Fakultas
                     <a href="{{route('fakultas.create')}}" class="btn btn-rounded btn-primary">Tambah</a>
                  </p>
                </p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Nama Fakultas</th>
                          <th>Singkatan</th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach ($fakultas as $value)
                            <tr> 
                                <td>{{ $value["nama"] }}</td>
                                <td>{{ $value["singkatan"] }} </td>
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