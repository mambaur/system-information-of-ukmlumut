@extends('admin.layout.main')

@section('title', 'Ubah Data Anggota UKM LUMUT')

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
    <h3 class="page-title">Ubah Data Anggota</h3>
  </div>
</div>
<div class="row">
    <div class="col-lg mb-4">
      <div class="card card-small mb-4">
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-3">
            <div class="row mx-1 py-2">
              <div class="col-sm-6 col-md">
                <form method="post" action="/admin/anggota/{{$anggota->id}}"  enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="form-group mt-2">
                        <input type="text" class="form-control" name="nama_anggota" placeholder="Nama Lengkap" value="{{$anggota->nama_anggota}}" required> 
                    </div>
                    <div class="form-group mt-2">
                        <input type="text" class="form-control" name="nal" placeholder="NAL" value="{{$anggota->nal}}" required> 
                    </div>
                    <div class="form-group mt-2">
                        <input type="text" class="form-control" name="nim" placeholder="NIM" value="{{$anggota->nim}}" required> 
                    </div>
                    <div class="form-group mt-2">
                        <input type="text" class="form-control" name="jurusan" placeholder="Prodi / Jurusan" value="{{$anggota->jurusan}}" required> 
                    </div>
                    <div class="form-group mt-2">
                        <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="{{$anggota->alamat}}" required> 
                    </div>
                    <div class="form-group mt-2">
                        <input type="text" class="form-control" name="kota" placeholder="Kota atau Kabupaten" value="{{$anggota->kota}}" required> 
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-7">
                        <select name="bidang" class="form-control" required>
                            <option value="{{$anggota->bidang}}" selected hidden>{{$anggota->bidang}}</option>
                            <option value="Lukis">Lukis</option>
                            <option value="Musik">Musik</option>
                            <option value="Tari">Tari</option>
                        </select>
                        </div>
                        <div class="form-group col-md-5">
                            <select name="jenjang" class="form-control" required>
                                <option value="{{$anggota->jenjang}}" selected hidden>{{$anggota->jenjang}}</option>
                                <option value="Calon Anggota">Calon Anggota</option>
                                <option value="Anggota Baru">Anggota Baru</option>
                                <option value="Anggota Muda">Anggota Muda</option>
                                <option value="Anggota Biasa">Anggota Biasa</option>
                                <option value="Anggota Luar Biasa">Anggota Luar Biasa</option>
                                <option value="Alumni">Alumni</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group w-50">
                        <input type="number" class="form-control" name="telp" placeholder="Nomor Telp / WA aktif" value="{{$anggota->telp}}" required>
                    </div>
                    <div class="form-group w-50">
                        <input type="number" class="form-control" name="angkatan" placeholder="Angkatan" value="{{$anggota->angkatan}}" required>
                    </div>
                    <div class="form-group">
                      <label for="upload-foto">Perbarui foto</label>
                      <input type="file" name="upload" class="form-control-file" id="upload-foto" accept="image/*" onchange="ValidateSize(this)">
                    </div>
                    
                    <button type="submit" class="mb-2 float-right btn btn btn-success mr-1">Ubah Data Anggota</button>
                </form>
              </div>
              
              <div class="col-sm-6 col-md">
                <img class="w-100" src="{{url('assets/admin/images/anggota/flat-design/Edit.png')}}" alt="">
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