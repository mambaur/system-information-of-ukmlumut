@extends('admin.layout.main')

@section('title', 'Detail Anggota UKM LUMUT')

@section('container')
<!-- / .main-navbar -->
<div class="main-content-container container-fluid px-4">
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
      <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Overview</span>
        <h3 class="page-title">Detail Data Anggota</h3>
      </div>
    </div>

    <div class="row">
        <div class="col-lg mb-4">
          <div class="card card-small mb-4">
            <ul class="list-group list-group-flush">
              <li class="list-group-item p-3">
                <div class="row mx-1 py-2">
                  <div class="col-sm-5">
                    <div class="mb-4 pt-3">
                        <div class="text-center">
                            <div class="mb-3 mx-auto">
                            <img class="rounded-circle" src="/assets/admin/images/anggota/{{$anggota->foto}}" alt="User Avatar" width="110"> </div>
                            <h4 class="mb-0">{{$anggota->nama_anggota}}</h4>
                            <span class="text-muted d-block mb-2">{{$anggota->jenjang}}</span>
                            <button type="button" class="mb-2 btn btn-sm btn-pill btn-outline-primary px-4">
                                {{$anggota->bidang}}
                            </button>
                            <a href="/admin/anggota/edit/{{$anggota->id}}">
                              <button type="button" class="mb-2 btn btn-sm btn-pill btn-outline-primary">
                                  <i class="material-icons">edit</i>
                              </button>
                            </a>
                        </div>
                    </div>
                  </div>
                  
                  <div class="col-sm-7">
                    <div class='my-auto'>
                        <div class="card-header border-bottom">
                          <h6 class="m-0">Informasi Data Anggota</h6>
                        </div>
                        <div class='card-body p-0'>
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item p-3">
                              <span class="d-flex mb-2">
                                <i class="material-icons mr-1">flag</i>
                                <strong class="mr-1">Nal:</strong> {{$anggota->nal}}
                              </span>
                              <span class="d-flex mb-2">
                                <i class="material-icons mr-1">visibility</i>
                                <strong class="mr-1">NIM:</strong>
                                <strong class="text-success">{{$anggota->nim}}</strong>
                              </span>
                              <span class="d-flex mb-2">
                                <i class="material-icons mr-1">calendar_today</i>
                                <strong class="mr-1">Jurusan:</strong> {{$anggota->jurusan}}
                              </span>
                              <span class="d-flex">
                                <i class="material-icons mr-1">score</i>
                                <strong class="mr-1">Telp:</strong>
                                <strong class="text-warning">{{$anggota->telp}}</strong>
                              </span>
                              <span class="d-flex">
                                <i class="material-icons mr-1">score</i>
                                <strong class="mr-1">Angkatan:</strong>
                                <strong class="text-warning">{{$anggota->angkatan}}</strong>
                              </span>
                            </li>
                            <li class="list-group-item p-4">
                                <strong class="text-muted d-block mb-2">Alamat</strong>
                                <span>{{$anggota->alamat}}, {{$anggota->kota}}</span>
                            </li>
                          </ul>
                        </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
    </div>
    <!-- End Page Header -->
</div>
<!-- / .end main-navbar -->
@endsection