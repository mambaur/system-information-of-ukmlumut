@extends('user.layout.post')

@section('title', 'Pendaftaran Calon Anggota UKM LUMUT')

@section('sub-title', 'Pendaftaran Calon Anggota UKM LUMUT')

@section('description', 'Form pendaftaran calon anggota UKM LUMUT')

@section('content')
<!-- SECTIONS
    ================================================== -->
    <section id="contact-info">
        <div class="container mb-5">
            <h2>Form Pendaftaran</h2><hr/>
            <form action="/pendaftaran-anggota" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label for="nama">Nama lengkap<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="nama_anggota" id="nama">
                        </div>
                        <div class="form-group">
                            <label for="nama">NIM<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="nim" id="nama">
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <label for="nama">Tempat lahir<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="tempat_lahir" id="nama">
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <label for="nama">Tanggal lahir<span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" name="tanggal_lahir" id="nama">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan<span class="text-danger">*</span></label>
                            <select class="form-control form-control-lg" id="jurusan" name="jurusan">
                                <option value="" hidden selected>-- Jurusan --</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="prodi">Program studi<span class="text-danger">*</span></label>
                            <select class="form-control form-control-lg" id="prodi" name="prodi" disabled>
                                <option value="" hidden selected>-- Program studi --</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama">Semester<span class="text-danger">*</span></label>
                            <select class="form-control form-control-lg" name="semester">
                                <option value="" hidden selected>-- Semester --</option>
                                <option value="Semester 1">Semester 1</option>
                                <option value="Semester 2">Semester 2</option>
                                <option value="Semester 3">Semester 3</option>
                                <option value="Semester 4">Semester 4</option>
                                <option value="Semester 5">Semester 5</option>
                                <option value="Semester 6">Semester 6</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Sertifikat (jika ada)</label>
                            <textarea name="sertifikat" class="form-control" id="exampleFormControlTextarea1" placeholder="1. Sertifikat lomba ... &#13;&#10;2. Sertifikat pelatihan ... &#13;&#10;3. ..." rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label for="nama">Bidang yang diminati<span class="text-danger">*</span></label>
                            <select class="form-control form-control-lg" id="bidang" name="bidang">
                                <option value="" hidden selected>-- Bidang --</option>
                                <option value="Lukis">Lukis</option>
                                <option value="Musik">Musik</option>
                                <option value="Tari">Tari</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama">Kategori bidang yang diminati<span class="text-danger">*</span></label>
                            <select class="form-control form-control-lg" id="kategori_bidang" name="kategori_bidang" disabled>
                                <option value="" hidden selected>-- Kategori bidang--</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama">Alamat<span class="text-danger">*</span></label>
                            <input type="text" name="alamat" class="form-control" id="nama">
                        </div>
                        <div class="form-group">
                            <label for="nama">Kota atau Kabupaten<span class="text-danger">*</span></label>
                            <input type="text" name="kota" class="form-control" id="nama">
                        </div>
                        <div class="form-group">
                            <label for="nama">No Telp (WA)<span class="text-danger">*</span></label>
                            <input type="number" name="telp" class="form-control" id="nama">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-8">
                                    <label for="nama">Upload foto 3x4 (background warna hijau tua)<span class="text-danger">*</span></label>
                                    <input type="file" name="upload" class="form-control" id="nama">
                                </div>
                                <div class="col-sm-4">
                                    <img src="/assets/user/images/pendaftaran/contoh-foto-pendaftaran-ca.jpg" class="w-50 mt-1" alt="">
                                    <p>*Contoh foto</p>
                                </div>
                            </div>
                        </div>
                        <hr />
                            
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                            <label class="form-check-label" for="exampleCheck1">Dengan ini saya menyatakan bersedia menjadi calon anggota dan sanggup mematuhi segala ketentuan yang ada di UKM LUMUT.</label>
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </div>

                </div>
            </form>
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
</script>
@endsection