@extends('admin.layout.main', ['menu' => 'log_user'])

@section('title', 'Log user login UKM LUMUT')

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
            <h3 class="page-title">Log user login</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg table-responsive">
            <table class="table table-dark">
                {{-- <thead>
                  <tr>
                    <th scope="col" class="w-25">Akses</th>
                    <th scope="col" class="w-50">Nama</th>
                    <th scope="col" class="w-25">Email</th>
                  </tr> --}}
                </thead>
                <tbody>
                    @foreach ($user as $item)
                    <tr class="d-flex">
                      <th class="col-2">{{$item->created_at}}</th>
                      <td class="col-7">{{$item->nama_user}}</td>
                      <td class="col-1">{{$item->email}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$user->links()}}
        </div>
    </div>
</div>
@endsection