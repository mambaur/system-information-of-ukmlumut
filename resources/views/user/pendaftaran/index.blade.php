@extends('user.layout.post')

@section('title', 'Pendaftaran Calon Anggota UKM LUMUT')

@section('sub-title', 'Pendaftaran Calon Anggota UKM LUMUT')

@section('description', 'Form pendaftaran calon anggota UKM LUMUT')

@section('content')
<!-- SECTIONS
    ================================================== -->
    <section id="contact-info">
        <div class="container mb-5">
            <form action="/admin" method="post">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label for="nama">Nama lengkap<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="nama">
                        </div>
                        <div class="form-group">
                            <label for="nama">NIM<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="nama">
                        </div>
                        <div class="form-group">
                            <label for="nama">Tempat lahir<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="nama">
                        </div>
                        <div class="form-group">
                            <label for="nama">Tanggal lahir<span class="text-danger">*</span></label>
                            <input type="date" class="form-control" id="nama">
                        </div>
                        <div class="form-group">
                            <label for="nama">Program studi<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="nama">
                        </div>
                        <div class="form-group">
                            <label for="nama">Semester<span class="text-danger">*</span></label>
                            <select class="form-control form-control-lg">
                                <option value="" hidden selected>-- Semester --</option>
                                <option value="">Semester 1</option>
                                <option value="">Semester 2</option>
                                <option value="">Semester 3</option>
                                <option value="">Semester 4</option>
                                <option value="">Semester 5</option>
                                <option value="">Semester 6</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Sertifikat (jika ada)</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="1. Sertifikat lomba ... &#13;&#10;2. Sertifikat pelatihan ... &#13;&#10;3. ..." rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label for="nama">Bidang yang diminati<span class="text-danger">*</span></label>
                            <select class="form-control form-control-lg">
                                <option value="" hidden selected>-- Bidang --</option>
                                <option value="">Lukis</option>
                                <option value="">Musik</option>
                                <option value="">Tari</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama">Kategori bidang yang diminati<span class="text-danger">*</span></label>
                            <select class="form-control form-control-lg">
                                <option value="" hidden selected>-- Kategori --</option>
                                <option value="">Tradisional</option>
                                <option value="">Modern</option>
                                <option value="">Lainnya</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama">Alamat<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="nama">
                        </div>
                        <div class="form-group">
                            <label for="nama">Kota atau Kabupaten<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="nama">
                        </div>
                        <div class="form-group">
                            <label for="nama">No Telp (WA)<span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="nama">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-8">
                                    <label for="nama">Upload foto 3x4 (background warna hijau tua)<span class="text-danger">*</span></label>
                                    <input type="file" class="form-control" id="nama">
                                </div>
                                <div class="col-sm-4">
                                    <img src="/assets/user/images/pendaftaran/contoh-foto-pendaftaran-ca.jpg" class="w-50 mt-1" alt="">
                                    <p>*Contoh foto</p>
                                </div>
                            </div>
                        </div>
                        <hr />
                            
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Dengan ini saya menyatakan bersedia menjadi calon anggota UKM LUMUT dan sanggup mematuhi segala ketentuan yang ada di UKM LUMUT.</label>
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </div>

                </div>
            </form>
        </div>
    </section>
@endsection