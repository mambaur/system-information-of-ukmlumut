@extends('admin.layout.main')

@section('title', 'Pengaturan UKM LUMUT')

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
    <h3 class="page-title">Pengaturan</h3>
  </div>
</div>
<!-- End Page Header -->
<div class="row">
    <div class="col-lg-8 col-md-12 col-sm-12 mb-4">
        <div class="card card-small">
          <div class="card-body p-0">
            <ul class="list-group list-group-small list-group-flush">
              <li class="list-group-item d-flex px-3">
                <span class="text-semibold text-fiord-blue">Peminjaman Alat</span>
                <span class="ml-auto text-right text-semibold text-reagent-gray">
                    <div class="custom-control custom-toggle custom-toggle-sm mb-1">
                        <input type="checkbox" id="customToggle2" name="customToggle2" class="custom-control-input" checked="checked">
                        <label class="custom-control-label" for="customToggle2"></label>
                    </div>
                </span>
              </li>
              <li class="list-group-item d-flex px-3">
                <span class="text-semibold text-fiord-blue">Pendaftaran CA</span>
                <span class="ml-auto text-right text-semibold text-reagent-gray">
                    <div class="custom-control custom-toggle custom-toggle-sm mb-1">
                        <input type="checkbox" id="customToggle3" name="customToggle3" class="custom-control-input">
                        <label class="custom-control-label" for="customToggle3"></label>
                    </div>
                </span>
              </li>
            </ul>
          </div>
        </div>
    </div>
</div>
</div>
@endsection