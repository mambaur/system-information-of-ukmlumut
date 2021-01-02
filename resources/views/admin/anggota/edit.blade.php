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
                      <input type="text" class="form-control @error('nama_anggota') is-invalid @enderror" name="nama_anggota" placeholder="Nama Lengkap" value="{{$anggota->nama_anggota}}"> 
                      @error('nama_anggota')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror 
                    </div>
                    <div class="form-row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <input type="text" class="form-control @error('nal') is-invalid @enderror" name="nal" placeholder="NAL" value="{{$anggota->nal}}">  
                          @error('nal')
                            <div class="invalid-feedback">{{ $message }}</div>
                          @enderror 
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <input type="number" class="form-control @error('angkatan') is-invalid @enderror" name="angkatan" placeholder="Angkatan" value="{{$anggota->angkatan}}"> 
                          @error('angkatan')
                            <div class="invalid-feedback">{{ $message }}</div>
                          @enderror 
                        </div>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col-sm-6">
                          <div class="form-group">
                              <input type="text" placeholder="Tempat lahir" class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" id="tempat_lahir" value="{{$anggota->tempat_lahir}}">
                              @error('tempat_lahir')
                                <div class="invalid-feedback">{{ $message }}</div>
                              @enderror 
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="form-group">
                              <input type="text" onfocus="(this.type='date')" value="{{$anggota->tanggal_lahir}}" onblur="(this.type='text')" placeholder="Tanggal lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" id="tanggal_lahir">
                              @error('tanggal_lahir')
                                <div class="invalid-feedback">{{ $message }}</div>
                              @enderror 
                          </div>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col-sm-6">
                        <div class="form-group mt-2">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{$anggota->email}}"> 
                            @error('email')
                              <div class="invalid-feedback">{{ $message }}</div>
                            @enderror 
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group mt-2">
                          <input type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" placeholder="NIM" value="{{$anggota->nim}}"> 
                          @error('nim')
                            <div class="invalid-feedback">{{ $message }}</div>
                          @enderror 
                        </div>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col-sm-4">
                        <div class="form-group mt-2">
                          <input type="text" class="form-control @error('jurusan') is-invalid @enderror" name="jurusan" placeholder="Jurusan" value="{{$anggota->jurusan}}"> 
                          @error('jurusan')
                            <div class="invalid-feedback">{{ $message }}</div>
                          @enderror 
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-group mt-2">
                          <input type="text" class="form-control @error('juruprodi') is-invalid @enderror" name="prodi" placeholder="Prodi" value="{{$anggota->prodi}}"> 
                          @error('prodi')
                            <div class="invalid-feedback">{{ $message }}</div>
                          @enderror 
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-group mt-2">
                          <input type="text" class="form-control @error('semester') is-invalid @enderror" name="semester" placeholder="Semester" value="{{$anggota->semester}}"> 
                          @error('semester')
                            <div class="invalid-feedback">{{ $message }}</div>
                          @enderror 
                        </div>
                      </div>
                    </div>
                    <div class="form-group mt-2">
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" placeholder="Alamat" value="{{$anggota->alamat}}"> 
                        @error('alamat')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror 
                    </div>
                    <div class="form-group mt-2">
                        <input type="text" class="form-control @error('kota') is-invalid @enderror" name="kota" placeholder="Kota atau Kabupaten" value="{{$anggota->kota}}"> 
                        @error('kota')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror 
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-4">
                          <select name="bidang" class="form-control @error('bidang') is-invalid @enderror">
                              <option value="{{$anggota->bidang}}" selected hidden>{{$anggota->bidang}}</option>
                              <option value="Lukis">Lukis</option>
                              <option value="Musik">Musik</option>
                              <option value="Tari">Tari</option>
                          </select>
                          @error('bidang')
                            <div class="invalid-feedback">{{ $message }}</div>
                          @enderror 
                        </div>
                        <div class="form-group col-md-4">
                          <input type="text" class="form-control @error('kategori_bidang') is-invalid @enderror" name="kategori_bidang" placeholder="Kategori bidang" value="{{$anggota->kategori_bidang}}"> 
                          @error('kategori_bidang')
                            <div class="invalid-feedback">{{ $message }}</div>
                          @enderror 
                      </div>
                        <div class="form-group col-md-4">
                            <select name="jenjang" class="form-control @error('jenjang') is-invalid @enderror">
                                <option value="{{$anggota->jenjang}}" selected hidden>{{$anggota->jenjang}}</option>
                                <option value="Calon Anggota">Calon Anggota</option>
                                <option value="Anggota Baru">Anggota Baru</option>
                                <option value="Anggota Muda">Anggota Muda</option>
                                <option value="Anggota Biasa">Anggota Biasa</option>
                                <option value="Anggota Luar Biasa">Anggota Luar Biasa</option>
                                <option value="Alumni">Alumni</option>
                            </select>
                            @error('jenjang')
                              <div class="invalid-feedback">{{ $message }}</div>
                            @enderror 
                        </div>
                    </div>
                    <div class="form-group w-50">
                        <input type="number" class="form-control @error('telp') is-invalid @enderror" name="telp" placeholder="Nomor Telp / WA aktif" value="{{$anggota->telp}}">
                        @error('telp')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror 
                    </div>
                    <div class="form-group">
                      <label for="sertifikat">Sertifikat (jika ada)</label>
                      <textarea name="sertifikat" class="form-control @error('sertifikat') is-invalid @enderror" id="sertifikat" placeholder="1. Sertifikat lomba ... &#13;&#10;2. Sertifikat pelatihan ... &#13;&#10;3. ..." rows="3">{{$anggota->sertifikat}}</textarea>
                      @error('sertifikat')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror  
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