@extends('user.layout.post')

@section('title', 'Pendaftaran Calon Anggota UKM LUMUT')

@section('sub-title', 'Pendaftaran Calon Anggota UKM LUMUT')

@section('description', 'Form pendaftaran calon anggota UKM LUMUT')

@section('content')

@if (session('status'))
    <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
        <i class="fa fa-check mx-2"></i>
        <strong>Sukses!</strong> {{session('status')}}
    </div>
@endif

<!-- SECTIONS
    ================================================== -->
    <section id="contact-info">
        <div class="container mb-5">
            @if ($pendaftaran_setting)
            <h2>Form Pendaftaran</h2><hr/>
            <form action="/pendaftaran-anggota" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label for="nama">Nama lengkap<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('nama_anggota') is-invalid @enderror" value="{{old('nama_anggota')}}" name="nama_anggota" id="nama">
                            @error('nama_anggota')
                              <div class="invalid-feedback">{{ $message }}</div>
                            @enderror 
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="nim">NIM<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" id="nim" value="{{old('nim')}}">
                                    @error('nim')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror 
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Email<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" name="email" id="email">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror 
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <label for="tempat_lahir">Tempat lahir<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" value="{{old('tempat_lahir')}}" name="tempat_lahir" id="tempat_lahir">
                                    @error('tempat_lahir')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror 
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <label for="tanggal_lahir">Tanggal lahir<span class="text-danger">*</span></label>
                                    <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" value="{{old('tanggal_lahir')}}" name="tanggal_lahir" id="tanggal_lahir">
                                    @error('tanggal_lahir')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror 
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan<span class="text-danger">*</span></label>
                            <select class="form-control form-control-lg @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan">
                                <option value="" hidden selected>-- Jurusan --</option>
                            </select>
                            @error('jurusan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror 
                        </div>
                        <div class="form-group">
                            <label for="prodi">Program studi<span class="text-danger">*</span></label>
                            <select class="form-control form-control-lg  @error('prodi') is-invalid @enderror" id="prodi" name="prodi" disabled>
                                <option value="" hidden selected>-- Program studi --</option>
                            </select>
                            @error('prodi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror 
                        </div>
                        <div class="form-group">
                            <label for="semester">Semester<span class="text-danger">*</span></label>
                            <select class="form-control form-control-lg @error('semester') is-invalid @enderror" name="semester" id="semester">
                                <option value="" hidden selected>-- Semester --</option>
                                <option value="Semester 1">Semester 1</option>
                                <option value="Semester 2">Semester 2</option>
                                <option value="Semester 3">Semester 3</option>
                                <option value="Semester 4">Semester 4</option>
                                <option value="Semester 5">Semester 5</option>
                                <option value="Semester 6">Semester 6</option>
                            </select>
                            @error('semester')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror 
                        </div>
                        
                        <div class="form-group">
                            <label for="sertifikat">Sertifikat (jika ada)</label>
                            <textarea name="sertifikat" class="form-control @error('sertifikat') is-invalid @enderror" id="sertifikat" placeholder="1. Sertifikat lomba ... &#13;&#10;2. Sertifikat pelatihan ... &#13;&#10;3. ..." rows="3">{{old('sertifikat')}}</textarea>
                            @error('sertifikat')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror 
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label for="bidang">Bidang yang diminati<span class="text-danger">*</span></label>
                            <select class="form-control form-control-lg @error('bidang') is-invalid @enderror" id="bidang" name="bidang">
                                <option value="" hidden selected>-- Bidang --</option>
                                <option value="Lukis">Lukis</option>
                                <option value="Musik">Musik</option>
                                <option value="Tari">Tari</option>
                            </select>
                            @error('bidang')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror 
                        </div>
                        <div class="form-group">
                            <label for="kategori_bidang">Kategori bidang yang diminati<span class="text-danger">*</span></label>
                            <select class="form-control form-control-lg @error('kategori_bidang') is-invalid @enderror" id="kategori_bidang" name="kategori_bidang" disabled>
                                <option value="" hidden selected>-- Kategori bidang--</option>
                            </select>
                            @error('kategori_bidang')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror 
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat<span class="text-danger">*</span></label>
                            <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{old('alamat')}}" id="alamat">
                            @error('alamat')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror 
                        </div>
                        <div class="form-group">
                            <label for="kota">Kota atau Kabupaten<span class="text-danger">*</span></label>
                            <input type="text" name="kota" class="form-control @error('kota') is-invalid @enderror" value="{{old('kota')}}" id="kota">
                            @error('kota')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror 
                        </div>
                        <div class="form-group">
                            <label for="telp">No Telp (WA)<span class="text-danger">*</span></label>
                            <input type="number" name="telp" class="form-control @error('telp') is-invalid @enderror" value="{{old('telp')}}" id="telp">
                            @error('telp')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror 
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-8">
                                    <label for="upload">Upload foto 3x4 (background warna hijau tua)<span class="text-danger">*</span></label>
                                    <input type="file" name="upload" class="form-control" id="upload-foto" accept="image/*" onchange="ValidateSize(this)" required>
                                    <small id="emailHelp" class="form-text text-muted">*Ukuran file maksimal 1 mb.</small>
                                </div>
                                <div class="col-sm-4">
                                    <img src="/assets/user/images/pendaftaran/contoh-foto-pendaftaran-ca.jpg" class="w-50 mt-1" alt="">
                                    <p>*Contoh foto</p>
                                </div>
                            </div>
                        </div>
                        <hr />
                            
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="check" required>
                            <label class="form-check-label" for="check">Dengan ini saya menyatakan bersedia menjadi calon anggota dan sanggup mematuhi segala ketentuan yang ada di UKM LUMUT.</label>
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </div>
                </div>
            </form>
            @else
            <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
                <i class="far fa-dizzy mx-2"></i>
                Mohon maaf, untuk saat ini UKM LUMUT belum membuka pendaftaran calon anggota.
            </div>
            @endif
        </div>
    </section>
@endsection

@section('script')
<script>

// Data bidang dan kategorinya
const bidang = {
    "results" : [
        {
            "nama_bidang" : "Lukis",
            "kategori_bidang" : [
                "Realisme", "Surealisme", "Abstrak", "Kartun", "Komik", "Mural", "Grafity", "Lainnya"
            ]
        },
        {
            "nama_bidang" : "Musik",
            "kategori_bidang" : [
                "Gitar", "Bass", "Drum", "Keyboard", "Singer", "Gamelan", "Lainnya"
            ]
        },
        {
            "nama_bidang" : "Tari",
            "kategori_bidang" : [
                "Tradisional", "Modern", "Kontemporer", "Lainnya"
            ]
        },
    ]
};

// Event bidang di klik
var kategori_bidang = document.getElementById('kategori_bidang');
var bidangSelect = document.getElementById('bidang');
bidangSelect.addEventListener('change', (event)=>{
    kategori_bidang.disabled = false;
    kategori_bidang.innerHTML = '';
    bidang.results[event.target.selectedIndex-1].kategori_bidang.forEach((item)=>{
        let option = document.createElement('option');
        option.setAttribute('value', item);
        option.innerHTML = item;
        kategori_bidang.appendChild(option);
    });
});


// Jurusan
const jurusan = {
    "results" : [
        {
            "nama_jurusan" : "Produksi Pertanian",
            "prodi" : ["Produksi Tanaman Holtikultura (PTH)", "Produksi Tanaman Perkebunan (PTP)", "Teknik Produksi Benih (TPB)", "Teknologi Produksi Tanaman Pangan (TPP)", "Budidaya Tanaman Perkebunan (BTP)"]
        }, 
        {
            "nama_jurusan" : "Teknologi Pertanian",
            "prodi" : ["Keteknikan Pertanian (TEP)", "Teknologi Industri Pangan (TIP)"]
        }, 
        {
            "nama_jurusan" : "Peternakan",
            "prodi" : ["Produksi Ternak (TNK)", "Manajemen Bisnis Unggas (MBU)"]
        }, 
        {
            "nama_jurusan" : "Manajemen Agribisnis",
            "prodi" : ["Manajemen Agribisnis (MNA)", "Manajemen Agroindustri (MID)"]
        }, 
        {
            "nama_jurusan" : "Teknologi Informasi",
            "prodi" : ["Manajemen Informatika (MIF)", "Teknik Komputer (TKK)", "Teknik Informatika (TIF)"]
        }, 
        {
            "nama_jurusan" : "Bahasa, Komunikasi dan Pariwisata",
            "prodi" : ["Bahasa Inggris Terapan (BIG)"]
        }, 
        {
            "nama_jurusan" : "Kesehatan",
            "prodi" : ["Rekam Medik (RMD)", "Gizi Klinik (GKL)"]
        }, 
        {
            "nama_jurusan" : "Teknik",
            "prodi" : ["Teknik Energi Terbarukan (TET)", "Mesin Otomotif(MOT)"]
        }, 
    ]
};

var jurusanSelect = document.getElementById("jurusan");
document.addEventListener("DOMContentLoaded", function() {
  jurusan.results.forEach((item)=>{
    let jurusanOption = document.createElement('option');
    jurusanOption.setAttribute('value', item.nama_jurusan);
    jurusanOption.innerHTML = item.nama_jurusan;
    jurusanSelect.appendChild(jurusanOption);
  });
});

var prodiSelect = document.getElementById("prodi");
jurusanSelect.addEventListener('change', (event)=>{
    prodiSelect.disabled = false;
    prodiSelect.innerHTML = '';
    jurusan.results[event.target.selectedIndex-1].prodi.forEach((item) => {
        let prodiOption = document.createElement('option');
        prodiOption.setAttribute('value', item);
        prodiOption.innerHTML = item;
        prodiSelect.appendChild(prodiOption);
    });
});

function ValidateSize(file) {
    var FileSize = file.files[0].size / 1024 / 1024; // in MiB
    if (FileSize > 2) {
        alert('Ukuran file harus kurang dari 1 MB');
        document.getElementById('upload-foto').value = "";
    }
}
</script>
@endsection