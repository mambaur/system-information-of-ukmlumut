@extends('admin.layout.main', ['menu' => 'pesan'])

@section('title', 'Pesan kritik dan saran UKM LUMUT')

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
            <h3 class="page-title">Pesan kritik dan saran</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg">
            @foreach ($pesan as $item)
                <div class="card card-small card-post mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{$item->isi_pesan}}</h5>
                    </div>
                    <div class="card-footer border-top d-flex">
                        <div class="card-post__author d-flex">
                        <a href="#" class="card-post__author-avatar card-post__author-avatar--small" style="background-image: url('/assets/admin/images/akun/default.jpg');"></a>
                        <div class="d-flex flex-column justify-content-center ml-3">
                            <span class="card-post__author-name">Tanpa nama</span>
                            <small class="text-muted">{{$item->created_at}}</small>
                        </div>
                        </div>
                        <div class="my-auto ml-auto">
                        <a class="btn btn-sm btn-white" href="/admin/pesan/hapus?id={{$item->id}}" onclick="return confirm('Apakah anda yakin ingin menghapus pesan ini?');">
                            <i class="far fa-trash-alt mr-1"></i> Hapus </a>
                        </div>
                    </div>
                </div>
            @endforeach
            @if (!count($pesan))
                <div class="text-center m-5">Belum ada pesan kritik dan saran.</div>
            @endif
            {{$pesan->links()}}
        </div>
    </div>
</div>
@endsection