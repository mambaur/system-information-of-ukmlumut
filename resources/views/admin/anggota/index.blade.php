@extends('admin.layout.main')

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
    <a class="text-decoration-none" href="/admin/perlengkapan">
      <button type="button" class="mb-2 btn btn-white">Anggota Lukis ({{count($lukis)}})</button>
    </a>
    <a class="text-decoration-none" href="/admin/perlengkapan/kategori?tipe=Dapur">
      <button type="button" class="mb-2 btn btn-white">Anggota Musik (23)</button>
    </a>
    <a class="text-decoration-none" href="/admin/perlengkapan/kategori?tipe=Dapur">
      <button type="button" class="mb-2 btn btn-white">Anggota Tari (30)</button>
    </a>
  </div>
  <div>
    <a href="{{url('/admin/anggota/tambah')}}">
      <button type="button" class="mb-2 btn btn-success">+ Tambah Anggota</button>
    </a>
    <a href="/admin/perlengkapan/cetak/tipe?" target="_blank">
      <button type="button" class="mb-2 btn btn-secondary">Cetak Presensi</button>
    </a>
  </div>
</div>
<div class="row">
  <!-- Top Referrals Component -->
  <div class="col-lg-8 col-md-12 col-sm-12 mb-4">
    <div class="card card-small">
      <div class="card-header border-bottom">
        <h6 class="m-0">Jenjang Anggota</h6>
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
      <div class="card-footer border-top">
        <div class="row">
          <div class="col">
            <select class="custom-select custom-select-sm">
              <option selected>Last Week</option>
              <option value="1">Today</option>
              <option value="2">Last Month</option>
              <option value="3">Last Year</option>
            </select>
          </div>
          <div class="col text-right view-report">
            <a href="#">Full report &rarr;</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Top Referrals Component -->
  <!-- Users By Device Stats -->
  <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
    <div class="card card-small h-100">
      <div class="card-header border-bottom">
        <h6 class="m-0">Users by device</h6>
      </div>
      <div class="card-body d-flex py-0">
        <canvas height="220" class="blog-users-by-device m-auto"></canvas>
      </div>
      <div class="card-footer border-top">
        <div class="row">
          <div class="col">
            <select class="custom-select custom-select-sm" style="max-width: 130px;">
              <option selected>Last Week</option>
              <option value="1">Today</option>
              <option value="2">Last Month</option>
              <option value="3">Last Year</option>
            </select>
          </div>
          <div class="col text-right view-report">
            <a href="#">Full report &rarr;</a>
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
              <th scope="col" class="border-0">NAL</th>
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
                <td>{{$item->nal}}</td>
                <td>
                  <a href="/admin/anggota/{{$item->id}}">
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
      </div>
    </div>
  </div>
</div>
{{ $anggota->links() }}
<!-- End Default Light Table -->
</div>
@endsection