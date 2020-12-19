@extends('admin.layout.main')

@section('title', 'Daftar Admin Sistem Informasi UKM LUMUT')

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
            <h3 class="page-title">Kelola Akun Admin</h3>
        </div>
    </div>
    <div class="row">
        <!-- List Admin -->
        <div class="col-lg col-md-12 col-sm-12 mb-4">
            <div class="card card-small blog-comments">
                <div class="card-header border-bottom d-flex justify-content-between">
                    <h6 class="m-0">Daftar akun admin</h6>
                    <div><a href="{{url('admin/kelola-admin/tambah')}}"><button class="btn btn-white">+ Tambah Admin</button></a></div>
                </div>
                <div class="card-body p-0">
                    @foreach ($user as $item)
                        <div class="blog-comments__item d-flex p-3">
                            <div class="blog-comments__avatar mr-3">
                            <img src="/assets/admin/images/akun/{{$item->image}}" alt="User avatar" /> </div>
                            <div class="blog-comments__content">
                            <div class="blog-comments__meta text-muted">
                                <a class="text-secondary" href="#">{{$item->name.' '.$item->nama_belakang}}</a> -
                                <a class="text-secondary" href="#">{{$item->jabatan}}</a>
                                <span class="text-muted">– Updated at {{$item->updated_at}}</span>
                            </div>
                            <p class="m-0 my-1 mb-2 text-muted">{{$item->email}}</p>
                            <div class="blog-comments__actions">
                                <div class="btn-group btn-group-sm">
                                <a href="/admin/kelola-admin/edit/{{$item->id}}">
                                    <button type="button" class="btn btn-white">
                                        <span class="text-success">
                                        <i class="material-icons">edit</i>
                                        </span> Edit 
                                    </button>
                                </a>
                                <form class="d-inline-block" method="post" action="/admin/kelola-admin/{{$item->id}}">
                                    @method('delete')
                                    @csrf
                                    @if ($item->role === 'Master' && $item->email === 'admin@gmail.com')
                                        <button type="button" class="btn btn-white">
                                            <span class="text-secondary">
                                            <i class="material-icons">clear</i>
                                            </span> Hapus 
                                        </button>
                                    @else
                                        <button type="submit" class="btn btn-white" onclick="return confirm('Apakah anda yakin ingin menghapus data {{$item->name}}?');">
                                            <span class="text-danger">
                                            <i class="material-icons">clear</i>
                                            </span> Hapus 
                                        </button>
                                    @endif
                                    
                                </form>
                                </div>
                            </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="card-footer border-top">
                <div class="row">
                    <div class="col text-center view-report d-flex justify-content-center">
                        {{ $user->links() }}
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!-- End Discussions Component -->
    </div>
    
</div>
@endsection