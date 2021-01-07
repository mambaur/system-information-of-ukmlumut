@extends('admin.layout.main')

@section('title', 'Perlengkapan UKM LUMUT')

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
    <h3 class="page-title">Data Perlengkapan</h3>
  </div>
</div>
<!-- End Page Header -->

<div class="form-row">
  <a href="/admin/perlengkapan/peminjaman?tipe=request" class="col mb-4 nav-link">
    <div class="bg-white rounded text-primary text-center p-3"><i class="material-icons">notification_important</i> Request Peminjaman ({{$totalRequest}})</div>
  </a>
  <a href="/admin/perlengkapan/peminjaman?tipe=terlambat" class="col mb-4 nav-link">
    <div class="bg-white rounded text-danger text-center p-3"><i class="material-icons">watch_later</i> Terlambat kembali ({{$totalTerlambat}})</div>
  </a>
  <a href="/admin/perlengkapan/peminjaman?tipe=dipinjam" class="col mb-4 nav-link">
    <div class="bg-white rounded text-warning text-center p-3"><i class="material-icons">hourglass_full</i> Barang Dipinjam ({{$totalDipinjam}})</div>
  </a>
  <a href="/admin/perlengkapan/peminjaman?tipe=selesai" class="col mb-4 nav-link">
    <div class="bg-white rounded text-success text-center p-3"><i class="material-icons">check_circle</i> Peminjaman Selesai ({{$totalSelesai}})</div>
  </a>
  <a href="/admin/perlengkapan/peminjaman?tipe=semua" class="col mb-4 nav-link">
    <div class="bg-white rounded text-dark text-center p-3"><i class="material-icons">find_in_page</i> Riwayat ({{$riwayat}})<i class="material-icons">keyboard_arrow_right</i></div>
  </a>
</div>

<!-- Default Light Table -->
<div class="row">
  <div class="col">
    <div class="d-flex justify-content-between">
      <div>
        <a class="text-decoration-none" href="/admin/perlengkapan">
          <button type="button" class="mb-2 btn {{$tipe === 'Semua' ? 'btn-primary' : 'btn-outline-primary' }}">Semua</button>
        </a>
        <a class="text-decoration-none" href="/admin/perlengkapan/kategori?tipe=Dapur">
          <button type="button" class="mb-2 btn {{$tipe === 'Dapur' ? 'btn-primary' : 'btn-outline-primary' }}">Dapur</button>
        </a>
        <a class="text-decoration-none" href="/admin/perlengkapan/kategori?tipe=Lukis">
          <button type="button" class="mb-2 btn {{$tipe === 'Lukis' ? 'btn-primary' : 'btn-outline-primary' }}">Lukis</button>
        </a>
        <a class="text-decoration-none" href="/admin/perlengkapan/kategori?tipe=Musik">
          <button type="button" class="mb-2 btn {{$tipe === 'Musik' ? 'btn-primary' : 'btn-outline-primary' }}">Musik</button>
        </a>
      </div>
      <div>
        <a href="{{url('/admin/perlengkapan/tambah')}}">
          <button type="button" class="mb-2 btn btn-success">+ Tambah</button>
        </a>
        <a href="/admin/perlengkapan/cetak/tipe?tipe={{$tipe}}" target="_blank">
          <button type="button" class="mb-2 btn btn-secondary">Cetak</button>
        </a>
      </div>
    </div>
    <div class="card card-small mb-4">
      <div class="card-header border-bottom">
        <h6 class="m-0">Daftar perlengkapan UKM LUMUT ({{$tipe}})</h6>
      </div>
      <div class="card-body p-0 pb-3 table-responsive">
        <table class="table mb-0">
          <thead class="bg-light">
            <tr>
              <th scope="col" class="border-0">#</th>
              <th scope="col" class="border-0">Nama Barang</th>
              <th scope="col" class="border-0">Kondisi</th>
              <th scope="col" class="border-0">Tipe</th>
              <th scope="col" class="border-0">Tahun</th>
              <th scope="col" class="border-0">Sumber</th>
              <th scope="col" class="border-0">Jumlah</th>
              <th scope="col" class="border-0">Status</th>
              <th scope="col" class="border-0"></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($perlengkapan as $item)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$item->nama_barang}}</td>
              <td>{{$item->kondisi}}</td>
              <td>{{$item->tipe}}</td>
              <td>{{$item->tahun}}</td>
              <td>{{$item->sumber}}</td>
              <td>{{$item->jumlah}}</td>
              <td>
                @if ($item->isDipinjam === 1)
                    Dipinjam
                @else
                    -
                @endif
              </td>
              <td>
                <a href="/admin/perlengkapan/{{$item->id}}" target="_blank"><button type="button" class="btn btn-sm btn-white"><i class="material-icons">visibility</i></button></a>
                <a href="/admin/perlengkapan/edit/{{$item->id}}" class="btn btn-sm btn-white"><i class="material-icons">edit</i></a>

                <form class="d-inline-block" method="post" action="/admin/perlengkapan/{{$item->id}}">
                  @method('delete')
                  @csrf
                  <button type="submit" class="btn btn-sm btn-white" onclick="return confirm('Apakah anda yakin ingin menghapus data {{$item->nama_barang}}?');">
                    <i class="material-icons">close</i>
                  </button>
                </form>
                
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        
        @if (!count($perlengkapan))
              <p class="text-center text-muted mt-2">Data perlengkapan tidak ditemukan.</p>
        @endif
      </div>
    </div>
  </div>
</div>
<!-- End Default Light Table -->
{{ $perlengkapan->links() }}
</div>
@endsection