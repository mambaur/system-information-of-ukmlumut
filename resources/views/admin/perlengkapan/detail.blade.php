@extends('admin.layout.main')

@section('title', 'Detail Perlengkapan UKM LUMUT')

@section('container')
<!-- / .main-navbar -->
<div class="main-content-container container-fluid px-4">
<!-- Page Header -->
<div class="page-header row no-gutters py-4">
  <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
    <span class="text-uppercase page-subtitle">Overview</span>
    <h3 class="page-title">Detail Data Perlengkapan</h3>
  </div>
</div>
<!-- End Page Header -->
  <div class="row">
    <!-- Top Referrals Component -->
    <div class="col-lg-8 col-md-12 col-sm-12 mb-4">
      <div class="card card-small">
        <div class="card-header border-bottom d-flex justify-content-between">
          <h3 class="m-0">{{$perlengkapan->nama_barang}}</h3>
          <a href="{{url('assets/admin/images/perlengkapan').'/'.$perlengkapan->gambar}}" target="_blank"><i class="material-icons">visibility</i> Lihat gambar</a>
        </div>
        <div class="card-body p-0">
          <ul class="list-group list-group-small list-group-flush">
            <li class="list-group-item d-flex px-3">
              <span class="text-semibold text-fiord-blue">Kondisi</span>
              <span class="ml-auto text-right text-semibold text-reagent-gray">{{$perlengkapan->kondisi}}</span>
            </li>
            <li class="list-group-item d-flex px-3">
              <span class="text-semibold text-fiord-blue">Tipe</span>
              <span class="ml-auto text-right text-semibold text-reagent-gray">{{$perlengkapan->tipe}}</span>
            </li>
            <li class="list-group-item d-flex px-3">
              <span class="text-semibold text-fiord-blue">Tahun</span>
              <span class="ml-auto text-right text-semibold text-reagent-gray">{{$perlengkapan->tahun}}</span>
            </li>
            <li class="list-group-item d-flex px-3">
              <span class="text-semibold text-fiord-blue">Sumber</span>
              <span class="ml-auto text-right text-semibold text-reagent-gray">{{$perlengkapan->sumber}}</span>
            </li>
            <li class="list-group-item d-flex px-3">
              <span class="text-semibold text-fiord-blue">Jumlah</span>
              <span class="ml-auto text-right text-semibold text-reagent-gray">{{$perlengkapan->jumlah}}</span>
            </li>
            <li class="list-group-item d-flex px-3">
              <span class="text-semibold text-fiord-blue">Dapat dipinjamkan?</span>
              <span class="ml-auto text-right text-semibold text-reagent-gray">{{$perlengkapan->statusPinjam?'Ya':'Tidak'}}</span>
            </li>
            <li class="list-group-item d-flex px-3">
              <span class="text-semibold text-fiord-blue">Status</span>
              <span class="ml-auto text-right text-semibold text-reagent-gray">
                {{$perlengkapan->isDipinjam?'Dipinjam':'-'}}
              </span>
            </li>
          </ul>
        </div>
        <div class="card-footer border-top">
          <div class="row">
            <div class="col">
              {{-- <select class="custom-select custom-select-sm">
                <option selected>Last Week</option>
                <option value="1">Today</option>
                <option value="2">Last Month</option>
                <option value="3">Last Year</option>
              </select> --}}
            </div>
            <div class="col text-right view-report">
              <a href="/admin/perlengkapan/edit/{{$perlengkapan->id}}">Ubah data &rarr;</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Top Referrals Component -->
    <!-- Discussions Component -->
    <div class="col-lg-4 col-md-12 col-sm-12 mb-4">
      <div class="card card-small blog-comments mb-3">
          <div class="card-header border-bottom">
            <h6 class="m-0">QR Code</h6>
          </div>
          <div class="card-body p-0 text-center">
            <img src="https://lh3.googleusercontent.com/proxy/5sp1lF-aPL7bTe5yZMEwYRJuxrSU7KjLCMhIdLG-B4l-C-Wsu4u3UMMrA6NtjtwdfKTAljLG6zOHmqQllToPDPItH2nh4exclu9QnOnu6w" alt="">
          </div>
          <div class="card-footer border-top">
            <div class="row">
              <div class="col text-center view-report">
              </div>
            </div>
          </div>
        </div>
    </div>
      <!-- End Discussions Component -->
  </div>
</div>
@endsection