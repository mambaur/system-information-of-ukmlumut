@extends('admin.layout.main', ['menu' => 'recruitmen'])

@section('title', 'Recruitmen UKM LUMUT')

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
    <h3 class="page-title">Data Pendaftaran anggota</h3>
  </div>
</div>
<!-- End Page Header -->
<div class="row">
    <div class="col-lg-8 col-md-12 col-sm-12 mb-4">
      <div class="mb-2">
        <a href="/admin/recruitmen/cetak-bidang?nama=Lukis" target="_blank"><button class="btn btn-white"><i class="material-icons">print</i> Cetak CA Lukis ({{$lukis}})</button></a>
        <a href="/admin/recruitmen/cetak-bidang?nama=Musik" target="_blank"><button class="btn btn-white"><i class="material-icons">print</i> Cetak CA Musik ({{$musik}})</button></a>        
        <a href="/admin/recruitmen/cetak-bidang?nama=Tari" target="_blank"><button class="btn btn-white"><i class="material-icons">print</i> Cetak CA Tari ({{$tari}})</button></a>        
      </div>
      <div class="card card-small">
        <div class="card-body p-0">
          <ul class="list-group list-group-small list-group-flush">
              @foreach ($anggota as $item)
              <li class="list-group-item d-flex">
                  <a href="/admin/anggota/edit/{{$item->id}}" class="d-block">
                      <span class="text-semibold text-fiord-blue">{{$item->nama_anggota}} ({{$item->bidang}})</span> <br/>
                      <span class="text-fiord-blue">{{$item->kota}}</span> 
                  </a>
                  <a href="/admin/anggota/{{$item->id}}" class="d-block ml-2" target="_blank">
                      <i class="material-icons">visibility</i> Lihat
                  </a>
                  <span class="ml-auto text-right text-semibold text-reagent-gray">
                      <form method="post" class="d-inline-block" action="/admin/recruitmen/{{$item->id}}">
                        @csrf
                        @method('patch')
                        <button type="submit" class="btn btn-sm btn-success" onclick="return confirm('Apakah anda yakin ingin menerima {{$item->nama_anggota}} sebagai Anggota Baru?');">Terima</button>
                      </form>
                      <form class="d-inline-block" method="post" action="/admin/recruitmen/{{$item->id}}">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-sm btn-white" onclick="return confirm('Apakah anda yakin ingin menolak {{$item->nama_anggota}}?');">
                          Tolak
                        </button>
                      </form>
                  </span>
              </li>
              @endforeach
          </ul>
        </div>
      </div>
      <div class="mt-3">
        {{$anggota->links()}}
      </div>
    </div>
    @if ($asal)
    <div class="col-lg-4 col-md-12 col-sm-12 mb-4">
        <div class="mb-2">
            <a href="/admin/recruitmen/cetak-presensi" target="_blank"><button class="btn btn-white"><i class="material-icons">print</i> Cetak presensi</button></a>
            <a href="/admin/recruitmen/cetak-semua" target="_blank"><button class="btn btn-white"><i class="material-icons">print</i> Cetak semua data CA</button></a>        
        </div>
        <div class="card card-small">
          <div class="card-body p-0">
            <ul class="list-group list-group-small list-group-flush">
                @foreach ($asal as $item)
                <li class="list-group-item d-flex px-3">
                  <span class="text-semibold text-fiord-blue">{{$keyAsal[$loop->iteration-1]}}</span>
                  <span class="ml-auto text-right text-semibold text-reagent-gray">
                      {{$item}}
                  </span>
                </li>
                @endforeach
            </ul>
          </div>
        </div>
    </div>
    @endif
</div>
@if (!count($anggota))
    <div class="text-center">Belum ada anggota yang mendaftar.</div>
@endif
</div>
@endsection