@extends('admin.layout.main', ['menu' => 'perlengkapan'])

@section('title', 'Tambah Perlengkapan UKM LUMUT')

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
    <h3 class="page-title">Tambah Data Perlengkapan</h3>
  </div>
</div>
<div class="row">
    <div class="col-lg mb-4">
      <div class="card card-small mb-4">
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-3">
            <div class="row mx-1 py-2">
              <div class="col-sm-6 col-md">
                <form method="post" action="{{url('admin/perlengkapan/')}}"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-2">
                        <input type="text" class="form-control" name="nama_barang" placeholder="Nama barang.." required> </div>
                    <div class="form-row">
                        <div class="form-group col-md-7">
                        <select name="tipe" class="form-control" required>
                            <option value="" disabled selected hidden>Tipe barang</option>
                            <option value="Kesekretariatan">Kesekretariatan</option>
                            <option value="Perkakas">Perkakas</option>
                            <option value="Pementasan">Pementasan</option>
                            <option value="Dapur">Dapur</option>
                            <option value="Lukis">Lukis</option>
                            <option value="Musik">Musik</option>
                            <option value="Tari">Tari</option>
                        </select>
                        </div>
                        <div class="form-group col-md-5">
                            <select name="kondisi" class="form-control" required>
                                <option value="" disabled selected hidden>Kondisi</option>
                                <option value="Baru">Baru</option>
                                <option value="Baik">Baik</option>
                                <option value="Kurang Baik">Kurang baik</option>
                                <option value="Tidak Baik">Tidak baik</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group w-50">
                        <input type="number" class="form-control" name="tahun" placeholder="Tahun" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="sumber" placeholder="Sumber" required>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="jumlah" placeholder="jumlah" required>
                    </div>
                    <div class="form-group">
                      <label for="upload-foto">Upload foto barang</label>
                      <input type="file" name="upload" class="form-control-file" id="upload-foto" accept="image/*" onchange="ValidateSize(this)">
                    </div>

                    <fieldset class="form-group">
                      <div class="row">
                        <legend class="col-form-label col-sm-12 pt-0">
                          Apakah barang ini dapat dipinjamkan?
                        </legend>
                        <div class="col-sm-8">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="statusPinjam" id="gridRadios1" value="1">
                            <label class="form-check-label" for="gridRadios1">
                              Ya
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="statusPinjam" id="gridRadios2" value="0" checked>
                            <label class="form-check-label" for="gridRadios2">
                              Tidak
                            </label>
                          </div>
                        </div>
                      </div>
                    </fieldset>
                    
                    <button type="submit" class="mb-2 float-right btn btn btn-success mr-1">Tambah Data</button>
                </form>
              </div>
              
              <div class="col-sm-6 col-md">
                <img class="w-100" src="{{url('assets/admin/images/perlengkapan/flat-design/tambah-perlengkapan.jpg')}}" alt="">
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