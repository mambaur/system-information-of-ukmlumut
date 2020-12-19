@extends('admin.layout.main')

@section('title', 'Daftar Admin Sistem Informasi UKM LUMUT')

@section('container')
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
                                <span class="text-muted">– 3 days ago</span>
                            </div>
                            <p class="m-0 my-1 mb-2 text-muted">Well, the way they make shows is, they make one show ...</p>
                            <div class="blog-comments__actions">
                                <div class="btn-group btn-group-sm">
                                <button type="button" class="btn btn-white">
                                    <span class="text-success">
                                    <i class="material-icons">visibility</i>
                                    </span> Lihat </button>
                                <button type="button" class="btn btn-white">
                                    <span class="text-danger">
                                    <i class="material-icons">clear</i>
                                    </span> Hapus </button>
                                <button type="button" class="btn btn-white">
                                    <span class="text-light">
                                    <i class="material-icons">edit</i>
                                    </span> Edit </button>
                                </div>
                            </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="card-footer border-top">
                <div class="row">
                    <div class="col text-center view-report">
                    <button type="submit" class="btn btn-white">View All Comments</button>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!-- End Discussions Component -->
    </div>
    
    {{ $user->links() }}
</div>
@endsection