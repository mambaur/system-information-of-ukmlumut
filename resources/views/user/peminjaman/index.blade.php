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
@elseif(session('error'))
<div class="alert alert-warning alert-dismissible fade show mb-0" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
    </button>
    <i class="fa fa-info mx-2"></i>
    <strong>Mohon maaf!</strong> {{session('error')}}
</div>
@endif

<!-- SECTIONS ===================== -->
    <section id="contact-info">
        <div class="container mb-5">
            @if (count($perlengkapan) && $peminjaman_setting)
            <h2>Form Peminjaman Barang</h2><hr/>
            <form action="/peminjaman-alat" enctype="multipart/form-data" method="post">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label for="nama_peminjam">Nama peminjam <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('nama_peminjam') is-invalid @enderror" id="nama_peminjam" name="nama_peminjam" value="{{old('nama_peminjam')}}">
                            @error('nama_peminjam')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" id="email" aria-describedby="emailHelp" name="email">
                            @error('email')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="instansi">Instansi atau organisasi peminjam <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('instansi') is-invalid @enderror" value="{{old('instansi')}}" id="instansi" name="instansi">
                            @error('instansi')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="acara">Digunakan untuk (acara) <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('acara') is-invalid @enderror" value="{{old('acara')}}" id="acara" name="acara">
                            @error('acara')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <textarea class="form-control @error('keterangan') is-invalid @enderror" value="{{old('keterangan')}}" id="keterangan" rows="3" name="keterangan">{{old('keterangan')}}</textarea>
                            @error('keterangan')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label for="tanggal_pinjam">Tanggal peminjaman <span class="text-danger">*</span></label>
                            <input type="date" name="tanggal_pinjam" class="form-control @error('tanggal_pinjam') is-invalid @enderror" id="tanggal_pinjam" value="<?= date('Y-m-d', time()); ?>">
                            @error('tanggal_pinjam')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tanggal_kembali">Tanggal pengembalian <span class="text-danger">*</span></label>
                            <input type="date" name="tanggal_kembali" class="form-control @error('tanggal_kembali') is-invalid @enderror" value="{{old('tanggal_kembali')}}" id="tanggal_kembali">
                            @error('tanggal_kembali')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <span>Pilih barang yang ingin dipinjam <span class="text-danger">*</span></span>
                            @foreach ($perlengkapan as $item)    
                            <div class="form-check">
                                <input type="checkbox" id="{{$item->id}}" class="form-check-input" value="{{$item->id}}" name="barang[]">
                                <label class="form-check-label" for="{{$item->id}}">{{$item->nama_barang}}</label>
                            </div>
                            @endforeach
                            <hr />
                            
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                <label class="form-check-label" for="exampleCheck1">Saya setuju dengan ketentuan peminjaman alat di UKM LUMUT</label>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        </div>
                    </div>

                </div>
            </form>
            @elseif(!count($perlengkapan))
            <div class="alert alert-warning alert-dismissible fade show mb-0" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
                <i class="far fa-dizzy mx-2"></i>
                Mohon maaf, barang UKM LUMUT untuk saat ini belum tersedia untuk dipinjamkan.
            </div>
            @else
            <div class="alert alert-warning alert-dismissible fade show mb-0" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
                <i class="far fa-dizzy mx-2"></i>
                Mohon maaf, untuk saat ini UKM LUMUT tidak membuka peminjaman barang untuk sementara.
            </div>
            @endif
        </div>
    </section>
@endsection

@section('script')
<script>

var tanggal_pinjam = document.getElementById('tanggal_pinjam');
var tanggal_kembali = document.getElementById('tanggal_kembali');

tanggal_kembali.addEventListener('change', (e)=>{
    if(new Date(e.target.value).getTime() < new Date(tanggal_pinjam.value).getTime()){
        tanggal_kembali.value = e.target.defaultValue;   
        alert("Tanggal kembali tidak boleh kurang dari tanggal pinjam.");
    }
});

</script>

@endsection