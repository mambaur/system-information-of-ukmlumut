@extends('admin.layout.main', ['menu' => 'anggota'])

@section('title', 'Anggota UKM LUMUT')

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
    <h3 class="page-title">Data Anggota</h3>
  </div>
</div>
<!-- End Page Header -->
{{-- Statistic --}}
<div class="d-flex justify-content-between">
  <div>
    <a class="text-decoration-none" href="/">
      <button type="button" class="mb-2 btn btn-white">Anggota Lukis ({{count($lukis)}})</button>
    </a>
    <a class="text-decoration-none" href="/">
      <button type="button" class="mb-2 btn btn-white">Anggota Musik ({{count($musik)}})</button>
    </a>
    <a class="text-decoration-none" href="/">
      <button type="button" class="mb-2 btn btn-white">Anggota Tari ({{count($tari)}})</button>
    </a>
    <a class="text-decoration-none" href="/">
      <button type="button" class="mb-2 btn btn-white">Total Anggota ({{count($anggota)}})</button>
    </a>
  </div>
  <div>
    <a href="{{url('/admin/anggota/tambah')}}">
      <button type="button" class="mb-2 btn btn-success">+ Tambah Anggota</button>
    </a>
    <a href="/admin/anggota/cetak/" target="_blank">
      <button type="button" class="mb-2 btn btn-secondary">Cetak Presensi</button>
    </a>
  </div>
</div>
<div class="row">
  <!-- Top Referrals Component -->
  <div class="col-lg-8 col-md-12 col-sm-12 mb-4">
    <div class="card card-small">
      <div class="card-header border-bottom">
        <h6 class="m-0">Data keanggotaan</h6>
      </div>
      <div class="card-body p-0">
        <ul class="list-group list-group-small list-group-flush">
          <li class="list-group-item d-flex px-3">
            <span class="text-semibold text-fiord-blue">Anggota Baru</span>
            <span class="ml-auto text-right text-semibold text-reagent-gray">
              {{count($anggotaBaru)}}
            </span>
          </li>
          <li class="list-group-item d-flex px-3">
            <span class="text-semibold text-fiord-blue">Anggota Muda</span>
            <span class="ml-auto text-right text-semibold text-reagent-gray">{{count($anggotaMuda)}}</span>
          </li>
          <li class="list-group-item d-flex px-3">
            <span class="text-semibold text-fiord-blue">Anggota Biasa</span>
            <span class="ml-auto text-right text-semibold text-reagent-gray">{{count($anggotaBiasa)}}</span>
          </li>
          <li class="list-group-item d-flex px-3">
            <span class="text-semibold text-fiord-blue">Anggota Luar Biasa</span>
            <span class="ml-auto text-right text-semibold text-reagent-gray">{{count($anggotaLuarBiasa)}}</span>
          </li>
          <li class="list-group-item d-flex px-3">
            <span class="text-semibold text-fiord-blue">Alumni</span>
            <span class="ml-auto text-right text-semibold text-reagent-gray">{{count($alumni)}}</span>
          </li>
          <li class="list-group-item d-flex px-3">
            <span class="text-semibold text-fiord-blue">Calon Anggota</span>
            <span class="ml-auto text-right text-semibold text-reagent-gray">{{count($calonAnggota)}}</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- End Top Referrals Component -->
  <!-- Users By Device Stats -->
  <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
    <div class="card card-small">
      <div class="card-header border-bottom">
        <h6 class="m-0"><i class="material-icons">print</i> Cetak data anggota</h6>
      </div>
      <div class="card-body py-0">
        <div class="row mb-2 mt-1">
          <div class="col-lg-6 p-1 d-flex justify-content-center">
            <a href="/admin/anggota/cetak-data?tipe=lukis&jenis=presensi" target="_blank"><button class="btn btn-white">Cetak presensi lukis</button></a>
          </div>
          <div class="col-lg-6 p-1 d-flex justify-content-center">
            <a href="/admin/anggota/cetak-data?tipe=musik&jenis=presensi" target="_blank"><button class="btn btn-white">Cetak presensi musik</button></a>
          </div>
          <div class="col-lg-6 p-1 d-flex justify-content-center">
            <a href="/admin/anggota/cetak-data?tipe=tari&jenis=presensi" target="_blank"><button class="btn btn-white">Cetak presensi tari</button></a>
          </div>
          <div class="col-lg-6 p-1 d-flex justify-content-center">
            <a href="/admin/anggota/cetak-data?tipe=lukis&jenis=bidang" target="_blank"><button class="btn btn-white">Cetak anggota lukis</button></a>
          </div>
          <div class="col-lg-6 p-1 d-flex justify-content-center">
            <a href="/admin/anggota/cetak-data?tipe=musik&jenis=bidang" target="_blank"><button class="btn btn-white">Cetak anggota musik</button></a>
          </div>
          <div class="col-lg-6 p-1 d-flex justify-content-center">
            <a href="/admin/anggota/cetak-data?tipe=tari&jenis=bidang" target="_blank"><button class="btn btn-white">Cetak anggota tari</button></a>
          </div>
          <div class="col-lg-6 p-1 d-flex justify-content-center">
            <a href="/admin/anggota/cetak-data?tipe=anggota_baru&jenis=jenjang" target="_blank"><button class="btn btn-white">Cetak anggota baru</button></a>
          </div>
          <div class="col-lg-6 p-1 d-flex justify-content-center">
            <a href="/admin/anggota/cetak-data?tipe=anggota_muda&jenis=jenjang" target="_blank"><button class="btn btn-white">Cetak anggota muda</button></a>
          </div>
          <div class="col-lg-6 p-1 d-flex justify-content-center">
            <a href="/admin/anggota/cetak-data?tipe=anggota_biasa&jenis=jenjang" target="_blank"><button class="btn btn-white">Cetak anggota biasa</button></a>
          </div>
          <div class="col-lg-6 p-1 d-flex justify-content-center">
            <a href="/admin/anggota/cetak-data?tipe=anggota_luar_biasa&jenis=jenjang" target="_blank"><button class="btn btn-white">Cetak anggota luar biasa</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Users By Device Stats -->
</div>
{{-- end statistic --}}
<!-- Default Light Table -->
<div class="row">
  <div class="col">
    <div class="card card-small mb-4">
      <div class="card-header border-bottom">
        <h6 class="m-0">Anggota Aktif</h6>
      </div>
      <div class="card-body p-0 pb-3 table-responsive">
        <table class="table mb-0">
          <thead class="bg-light">
            <tr>
              <th scope="col" class="border-0">Nama Lengkap</th>
              <th scope="col" class="border-0">Bidang</th>
              <th scope="col" class="border-0">Angkatan</th>
              <th scope="col" class="border-0">Jenjang</th>
              <th scope="col" class="border-0">Asal</th>
              <th scope="col" class="border-0"></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($anggota as $item)
              <tr>
                <td><i class="material-icons mr-2">person</i>{{$item->nama_anggota}}</td>
                <td>{{$item->bidang}}</td>
                <td>{{$item->angkatan}}</td>
                <td>{{$item->jenjang}}</td>
                <td>{{$item->kota}}</td>
                <td>
                  <a href="/admin/anggota/{{$item->id}}" target="_blank">
                    <button type="button" class="btn btn-sm btn-white">
                      <i class="material-icons">visibility</i>
                    </button>
                  </a>
                  <a href="/admin/anggota/edit/{{$item->id}}">
                    <button type="button" class="btn btn-sm btn-white">
                      <i class="material-icons">edit</i>
                    </button>
                  </a>

                  <form class="d-inline-block" method="post" action="/admin/anggota/{{$item->id}}">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-sm btn-white" onclick="return confirm('Apakah anda yakin ingin menghapus data {{$item->nama_anggota}}?');">
                      <i class="material-icons">close</i>
                    </button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        @if (!count($anggota))
              <p class="text-center text-muted mt-2">Data anggota tidak ditemukan.</p>
        @endif
      </div>
    </div>
  </div>
</div>
{{ $anggota->links() }}
<!-- End Default Light Table -->
</div>
@endsection