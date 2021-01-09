@extends('admin.layout.main', ['menu' => 'akun'])

@section('title', 'Informasi Akun Anda')

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
        <h3 class="page-title">Informasi Akun Anda</h3>
    </div>
    </div>
    <!-- End Page Header -->
    <!-- Default Light Table -->
    <div class="row">
    <div class="col-lg-4">
        <div class="card card-small mb-4 pt-3">
        <div class="card-header border-bottom text-center">
            <div class="mb-3 mx-auto">
            <img class="rounded-circle" src="/assets/admin/images/akun/{{\Auth::user()->image}}" alt="User Avatar" width="110"> </div>
            <h4 class="mb-0">{{\Auth::user()->name}}</h4>
            <span class="text-muted d-block mb-2">{{\Auth::user()->jabatan}}</span>
            <button type="button" class="mb-2 btn btn-sm btn-pill btn-outline-primary mr-2">
            <i class="material-icons mr-1">person</i>{{\Auth::user()->role}}</button>
        </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="card card-small mb-4">
        <div class="card-header border-bottom">
            <h6 class="m-0">Account Details</h6>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item p-3">
            <div class="row">
                <div class="col">
                <form action="/admin/akun/{{\Auth::user()->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="feFirstName">Nama Depan</label>
                        <input type="text" class="form-control" id="feFirstName" name="nama" placeholder="First Name" value="{{\Auth::user()->name}}" required> </div>
                    <div class="form-group col-md-6">
                        <label for="feLastName">Nama Belakang</label>
                        <input type="text" class="form-control" id="feLastName" name="nama_belakang" placeholder="Last Name" value="{{\Auth::user()->nama_belakang}}"> </div>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="feEmailAddress">Email</label>
                        <input type="email" class="form-control" name="email" id="feEmailAddress" placeholder="Email" value="{{\Auth::user()->email}}" disabled required> </div>
                    <div class="form-group col-md-6">
                        <label for="fePassword">Password Baru</label>
                        <input type="password" class="form-control" id="fePassword" name="password" placeholder="Password"> </div>
                    </div>
                    <div class="form-group">
                      <label for="upload-foto">Perbarui foto</label>
                      <input type="file" name="upload" class="form-control-file" id="upload-foto" accept="image/*" onchange="ValidateSize(this)">
                    </div>
                    <button type="submit" class="btn btn-accent float-right">Update Akun</button>
                </form>
                </div>
            </div>
            </li>
        </ul>
        </div>
    </div>
    </div>
    <!-- End Default Light Table -->
</div>
<script>
function ValidateSize(file) {
    var FileSize = file.files[0].size / 1024 / 1024; // in MiB
    if (FileSize > 2) {
        alert('Ukuran file harus kurang dari 1 MB');
        document.getElementById('upload-foto').value = "";
    }
}
</script>
@endsection