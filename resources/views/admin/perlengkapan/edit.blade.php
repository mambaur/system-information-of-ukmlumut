@extends('admin.layout.main')

@section('title', 'Ubah data Perlengkapan UKM LUMUT')

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
    <h3 class="page-title">Ubah Data Perlengkapan</h3>
  </div>
</div>
<div class="row">
    <div class="col-lg mb-4">
      <div class="card card-small mb-4">
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-3">
            <div class="row mx-1 my-2">
              <div class="col-sm-6 col-md">
                <form method="post" action="/admin/perlengkapan/{{$perlengkapan->id}}" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="form-group mt-2">
                        <input type="text" class="form-control" name="nama_barang" placeholder="Nama barang.." value="{{$perlengkapan->nama_barang}}" required> </div>
                    <div class="form-row">
                        <div class="form-group col-md-7">
                        <select name="tipe" class="form-control" required>
                            <option value="{{$perlengkapan->tipe}}" selected hidden>{{$perlengkapan->tipe}}</option>
                            <option value="Dapur">Dapur</option>
                            <option value="Lukis">Lukis</option>
                            <option value="Musik">Musik</option>
                            <option value="Tari">Tari</option>
                        </select>
                        </div>
                        <div class="form-group col-md-5">
                            <select name="kondisi" class="form-control" required>
                                <option value="{{$perlengkapan->kondisi}}" selected hidden>{{$perlengkapan->kondisi}}</option>
                                <option value="Baru">Baru</option>
                                <option value="Baik">Baik</option>
                                <option value="Kurang Baik">Kurang baik</option>
                                <option value="Tidak Baik">Tidak baik</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group w-50">
                        <input type="number" class="form-control" name="tahun" placeholder="Tahun" value="{{$perlengkapan->tahun}}" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="sumber" placeholder="Sumber" value="{{$perlengkapan->sumber}}" required>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="jumlah" placeholder="jumlah" value="{{$perlengkapan->jumlah}}" required>
                    </div>
                    <div class="form-group">
                      <label for="upload-foto">Update foto barang</label>
                      <input type="file" name="upload" class="form-control-file" id="upload-foto" accept="image/*" onchange="ValidateSize(this)">
                    </div>
                    
                    <input type="hidden" name="isDipinjam" value="{{$perlengkapan->isDipinjam}}" id="">

                    <fieldset class="form-group">
                      <div class="row">
                        <legend class="col-form-label col-sm-12 pt-0">
                          Apakah barang ini dapat dipinjamkan?
                        </legend>
                        <div class="col-sm-8">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="statusPinjam" id="gridRadios1" value="1" {{$perlengkapan->statusPinjam ? 'checked' : ''}}>
                            <label class="form-check-label" for="gridRadios1">
                              Ya
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="statusPinjam" id="gridRadios2" value="0" {{!$perlengkapan->statusPinjam ? 'checked' : ''}}>
                            <label class="form-check-label" for="gridRadios2">
                              Tidak
                            </label>
                          </div>
                        </div>
                      </div>
                    </fieldset>

                    <hr />
                    <button type="submit" class="mb-2 float-right btn btn btn-success mr-1">Ubah data</button>
                </form>
              </div>
              <div class="col-sm-6 col-md">
                <img class="w-100" src="{{url('assets/admin/images/perlengkapan/flat-design/edit-perlengkapan.jpg')}}" alt="">
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