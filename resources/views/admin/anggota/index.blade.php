@extends('admin.layout.main')

@section('title', 'Anggota UKM LUMUT')

@section('container')
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
<!-- Default Light Table -->
<div class="row">
  <div class="col">
    <div class="card card-small mb-4">
      <div class="card-header border-bottom">
        <h6 class="m-0">Active Users</h6>
      </div>
      <div class="card-body p-0 pb-3 table-responsive">
        <table class="table mb-0">
          <thead class="bg-light">
            <tr>
              <th scope="col" class="border-0">Nama Lengkap</th>
              <th scope="col" class="border-0">Bidang</th>
              <th scope="col" class="border-0">Angkatan</th>
              <th scope="col" class="border-0">Status Keanggotaan</th>
              <th scope="col" class="border-0">Jenjang</th>
              <th scope="col" class="border-0"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><i class="material-icons mr-2">person</i>Ali</td>
              <td>Kerry</td>
              <td>Russian Federation</td>
              <td>Gdańsk</td>
              <td>107-0339</td>
              <td>
                <button type="button" class="btn btn-sm btn-white"><i class="material-icons">visibility</i></button>
                <button type="button" class="btn btn-sm btn-white"><i class="material-icons">edit</i></button>
                <button type="button" class="btn btn-sm btn-white"><i class="material-icons">close</i></button>
              </td>
            </tr>
            <tr>
              <td> <i class="material-icons mr-2">person</i>Clark</td>
              <td>Angela</td>
              <td>Estonia</td>
              <td>Borghetto di Vara</td>
              <td>1-660-850-1647</td>
              <td>
                <button type="button" class="btn btn-sm btn-white"><i class="material-icons">visibility</i></button>
                <button type="button" class="btn btn-sm btn-white"><i class="material-icons">edit</i></button>
                <button type="button" class="btn btn-sm btn-white"><i class="material-icons">close</i></button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- End Default Light Table -->
</div>
@endsection