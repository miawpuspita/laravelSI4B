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
                  </p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Nama Prodi</th>
                          <th>Singkatan</th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach ($prodi as $value)
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
@endsection
