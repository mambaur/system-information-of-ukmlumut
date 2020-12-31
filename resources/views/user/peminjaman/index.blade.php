@extends('user.layout.post')

@section('title', 'Peminjaman Alat UKM LUMUT')

@section('sub-title', 'Peminjaman Alat UKM LUMUT')

@section('description', 'Form permohonan peminjaman alat UKM LUMUT')

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
            <form action="/peminjaman-alat" enctype="multipart/form-data" method="post">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label for="nama">Nama peminjam <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="nama" name="nama_peminjam">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                        </div>
                        <div class="form-group">
                            <label for="instansi">Instansi atau organisasi peminjam <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="instansi" name="instansi">
                        </div>
                        <div class="form-group">
                            <label for="instansi">Digunakan untuk (acara) <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="instansi" name="acara">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Keterangan</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="keterangan"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label for="tanggal_pinjam">Tanggal peminjaman <span class="text-danger">*</span></label>
                            <input type="date" name="tanggal_pinjam" class="form-control" id="tanggal_pinjam" value="<?= date('Y-m-d', time()); ?>">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_kembali">Tanggal pengembalian <span class="text-danger">*</span></label>
                            <input type="date" name="tanggal_kembali" class="form-control" id="tanggal_kembali">
                        </div>
                        <div class="form-group">
                            <span>Pilih barang yang ingin dipinjam <span class="text-danger">*</span></span>
                            @foreach ($perlengkapan as $item)    
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="{{$item->id}}" name="{{$item->id}}">
                                <label class="form-check-label" for="{{$item->id}}">{{$item->nama_barang}}</label>
                            </div>
                            @endforeach
                            <hr />
                            
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Saya setuju dengan ketentuan peminjaman alat di UKM LUMUT</label>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </section>
@endsection