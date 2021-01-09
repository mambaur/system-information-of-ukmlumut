@extends('admin.layout.main', ['menu' => 'perlengkapan'])

@section('title', 'Peminjaman Perlengkapan UKM LUMUT')

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
        <h3 class="page-title">Peminjaman {{$tipe}}</h3>
    </div>
    </div>
    <!-- End Page Header -->
    <div class="row mb-5">
        <div class="col-lg">
            <div class="card card-small">
                <div class="card-body p-0">
                  <ul class="list-group list-group-small list-group-flush">
                      @foreach ($peminjaman as $item)
                      <li class="list-group-item">
                        <div class="d-inline-block d-flex justify-content-between">
                            <a href="#" class="d-inline-block ml-2">
                                @if ($item->status === "ditolak")
                                <span class="text-semibold text-danger p-0 m-0 lead">
                                    <i class="material-icons">error_outline</i> 
                                    {{$item->acara}} (Ditolak)
                                </span>
                                @else    
                                <span class="text-semibold text-success p-0 m-0 lead">
                                    <i class="material-icons">error_outline</i> 
                                    {{$item->acara}}
                                </span>
                                @endif
                                
                                <br/>
                                <span class="text-fiord-blue">
                                    {{$item->nama_peminjam}} - 
                                    <span class="badge rounded-pill bg-secondary text-white">
                                        {{$item->instansi}}</span> |  
                                    Tanggal pinjam : <span class="text-primary">{{$item->tanggal_pinjam}}</span> | 
                                    Tanggal kembali : <span class="text-primary">{{$item->tanggal_kembali}}</span>
                                    <div class="">
                                        {{$item->keterangan}}
                                    </div>
                                </span> 
                            </a>
                            <div>
                                <span class="text-muted mr-2">{{$item->created_at}}</span>
                                <form class="d-inline-block" action="/admin/perlengkapan/konfirmasi-peminjaman/{{$item->id}}" method="post">
                                    <input type="hidden" value="{{$item->kode_pinjam}}" name="kode_pinjam">
                                @csrf
                                @method('patch')
                                    @if ($item->status === "request")
                                        <button type="submit" name="submit" value="konfirmasi" class="btn btn-success">Konfirmasi</button>
                                        <button type="submit" name="submit" value="tolak" class="btn btn-white">Tolak</button>
                                    
                                    @elseif($item->status === "dipinjam")
                                        <button type="submit" name="submit" value="pengembalian" class="btn btn-success">Konfirmasi Pengembalian</button>
                                    @elseif($item->status === "terlambat")
                                        <button type="submit" name="submit" value="pengembalian" class="btn btn-success">Konfirmasi Pengembalian</button>
                                        <button type="submit" name="submit" value="hapus" class="btn btn-white">Hapus</button>
                                    @else
                                        <button type="submit" name="submit" value="hapus" class="btn btn-white">Hapus</button>
                                    @endif
                                </form>
                                
                            </div>
                        </div>
                        <div class="mt-3">
                            @foreach ($detail_peminjaman as $item_detail)
                                @if ($item_detail->peminjamans_kode_pinjam === $item->kode_pinjam)
                                <div class="row ml-5 mt-1">
                                    <img src="/assets/admin/images/perlengkapan/{{$item_detail->gambar}}" style="height:40px" alt="">
                                    <span class="ml-2">
                                        <div class="text-dark"><a target="_blank" href="/admin/perlengkapan/{{$item_detail->id}}">{{$item_detail->nama_barang}}</a></div>
                                        <div class="text-muted">Kondisi : {{$item_detail->kondisi}}</div>
                                    </span>
                                </div>
                                @endif
                            @endforeach
                        </div>
                      </li>
                      @endforeach
                  </ul>
                </div>
            </div>
        </div>
        {{$peminjaman->links()}}
    </div>
</div>
@endsection