@extends('user.layout.post')

@section('title', 'Pendaftaran Calon Anggota UKM LUMUT')

@section('sub-title', 'Pendaftaran Calon Anggota UKM LUMUT')

@section('description', 'Form pendaftaran calon anggota UKM LUMUT')

@section('content')
<!-- SECTIONS
    ================================================== -->
    <section id="contact-info">
        <div class="container mb-5">
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
                        <div class="form-group">
                            <label for="nama">Tempat lahir<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="tempat_lahir" id="nama">
                        </div>
                        <div class="form-group">
                            <label for="nama">Tanggal lahir<span class="text-danger">*</span></label>
                            <input type="date" class="form-control" name="tanggal_lahir" id="nama">
                        </div>
                        <div class="form-group">
                            <label for="nama">Program studi<span class="text-danger">*</span></label>
                            <input type="text" name="jurusan" class="form-control" id="nama">
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
                            <select class="form-control form-control-lg" name="bidang">
                                <option value="" hidden selected>-- Bidang --</option>
                                <option value="Lukis">Lukis</option>
                                <option value="Musik">Musik</option>
                                <option value="Tari">Tari</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama">Kategori bidang yang diminati<span class="text-danger">*</span></label>
                            <select class="form-control form-control-lg" name="kategori_bidang">
                                <option value="" hidden selected>-- Kategori --</option>
                                <option value="">Tradisional</option>
                                <option value="">Modern</option>
                                <option value="">Lainnya</option>
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
                            <label class="form-check-label" for="exampleCheck1">Dengan ini saya menyatakan bersedia menjadi calon anggota UKM LUMUT dan sanggup mematuhi segala ketentuan yang ada di UKM LUMUT.</label>
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </div>

                </div>
            </form>
        </div>
    </section>
@endsection