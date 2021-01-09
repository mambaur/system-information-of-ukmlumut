@extends('admin.layout.main', ['menu' => 'kelola_admin'])

@section('title', 'Tambah hak akses Admin')

@section('container')
@if (session('status'))
    <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
        <i class="fa fa-check mx-2"></i>
        <strong>Sukses!</strong> {{session('status')}}
    </div>
@endif

<!-- / .main-navbar -->
<div class="main-content-container container-fluid px-4">
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">Overview</span>
            <h3 class="page-title">Tambah Akun Admin</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg mb-4">
            <div class="card card-small mb-4">
              <ul class="list-group list-group-flush">
                <li class="list-group-item p-3">
                  <div class="row mx-1 py-2">
                    <div class="col-sm-8 col-md-7">
                      <img class="w-100" src="{{url('assets/admin/images/akun/tambah-akun.png')}}" alt="">
                    </div>

                    <div class="col-sm-4 col-md-5">
                      <form method="post" action="{{url('admin/kelola-admin/')}}"  enctype="multipart/form-data">
                          @csrf
                          <div class="form-group mt-2">
                            <div class="form-row">
                                <div class="col-md-7">
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" value="{{old('nama')}}" name="nama" placeholder="Nama Depan">
                                    @error('nama') <div class="invalid-feedback">{{$message}}</div>@enderror
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" name="nama_belakang" placeholder="Nama belakang">
                                </div>
                              </div>
                          </div>
                          <div class="form-group w-50">
                            <select name="jabatan" class="form-control @error('jabatan') is-invalid @enderror">
                                <option value="" disabled selected hidden>Jabatan</option>
                                <option value="Ketua Umum">Ketua Umum</option>
                                <option value="Sekretaris">Sekretaris</option>
                                <option value="Bendahara">Bendahara</option>
                                <option value="Litbang">Litbang</option>
                                <option value="Humas">Humas</option>
                                <option value="Keanggotaan">Keanggotaan</option>
                                <option value="Perlengkapan I">Perlengkapan I</option>
                                <option value="Perlengkapan II">Perlengkapan II</option>
                                <option value="Kabid Lukis">Kabid Lukis</option>
                                <option value="Wakabid Lukis">Wakabid Lukis</option>
                                <option value="Kabid Musik">Kabid Musik</option>
                                <option value="Wakabid Musik">Wakabid Musik</option>
                                <option value="Kabid Tari">Kabid Tari</option>
                                <option value="Wakabid Tari">Wakabid Tari</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                            @error('jabatan') <div class="invalid-feedback">{{$message}}</div>@enderror
                          </div>
                          <div class="form-group w-50">
                            <select name="role" class="form-control @error('role') is-invalid @enderror">
                                <option value="" disabled selected hidden>Hak Akses</option>
                                <option value="Master">Master</option>
                                <option value="Admin">Admin</option>
                            </select>
                            @error('role') <div class="invalid-feedback">{{$message}}</div>@enderror
                          </div>
                          <div class="form-group mt-2">
                              <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" placeholder="Email"> 
                              @error('email') <div class="invalid-feedback">{{$message}}</div>@enderror
                          </div>
                          <div class="form-group mt-2">
                              <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password"> 
                              @error('password') <div class="invalid-feedback">{{$message}}</div>@enderror
                          </div>
                          <div class="form-group">
                            <label for="upload-foto">Upload foto</label>
                            <input type="file" name="upload" class="form-control-file" id="upload-foto" accept="image/*" onchange="ValidateSize(this)">
                          </div>
                          
                          <button type="submit" class="mb-2 float-right btn btn btn-success mr-1">Tambah Admin</button>
                      </form>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
        </div>
    </div>
</div>
<script>
    function ValidateSize(file) {
        var FileSize = file.files[0].size / 1024 / 1024; // in MiB
        if (FileSize > 2) {
            alert('Ukuran file harus kurang dari 1 MB');
            document.getElementById('upload-foto').value = "";
        }
    }
    </script>
@endsection