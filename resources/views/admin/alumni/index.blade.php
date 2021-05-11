@extends('admin.layout.main', ['menu' => 'alumni'])

@section('title', 'Data Alumni UKM LUMUT')

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

<div class="main-content-container container-fluid px-4">
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
      <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Overview</span>
        <h3 class="page-title">Data Alumni ({{count($alumni)}})</h3>
      </div>
    </div>

    <div class="d-flex justify-content-between">
      <a href="/admin/alumni/cetak" target="_blank">
        <button class="btn btn-white mb-2"><i class="material-icons">print</i> Cetak semua data alumni</button>
      </a>
      <div>
        <a href="/admin/alumni/kategori?bidang=Lukis">
          <button class="btn btn-white mb-2">Lukis</button>
        </a>
        <a href="/admin/alumni/kategori?bidang=Musik">
          <button class="btn btn-white mb-2">Musik</button>
        </a>
        <a href="/admin/alumni/kategori?bidang=Tari">
          <button class="btn btn-white mb-2">Tari</button>
        </a>

        <div class="d-inline-block">
          <span class="text-muted ml-3">Filter by year</span>
          <select name="year" id="year" class="form-control">
            <option value="" hidden selected>Pilih tahun</option>
            @for ($i = 0; $i < 35; $i++)
                <option name="{{1996+$i}}">{{1996+$i}}</option>
            @endfor
          </select>
        </div>
      </div>
    </div>

    <div class="row">
        @foreach ($alumni as $item)
        <div class="col-lg-12 col-sm-12 mb-4">
          <div class="card card-small card-post card-post--aside card-post--1">
            <div class="card-post__image" style="background-image: url('/assets/admin/images/anggota/{{$item->foto}}');">
              <a href="#" class="card-post__category badge badge-pill badge-info">{{$item->bidang}}</a>
              <div class="card-post__author d-flex">
              </div>
            </div>
            <div class="card-body">
              <h5 class="card-title">
                <a class="text-fiord-blue" href="#">{{$item->nama_anggota}}</a>
              </h5>
              <p class="card-text mb-3">{{$item->jurusan}}, {{$item->alamat}} - {{$item->telp}}</p>
              <span class="text-muted">Angkatan {{$item->angkatan}} - </span>

              <a href="/admin/anggota/edit/{{$item->id}}">
                <button class="btn btn-white"><i class="material-icons">edit</i> Edit</button>
              </a>
              <form class="d-inline-block" method="post" action="/admin/anggota/{{$item->id}}">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-sm btn-white" onclick="return confirm('Apakah anda yakin ingin menghapus data {{$item->nama_anggota}}?');">
                  <i class="material-icons">close</i> Hapus
                </button>
              </form>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      @if (!count($alumni))
      <div class="row mx-auto d-flex justify-content-center">
        <p class="text-center text-muted mt-5">Data alumni tidak ditemukan.</p>
      </div>
      @endif
    
    {{ $alumni->appends(request()->input())->links() }}
</div>
@endsection

@section('script')
    <script>
      var url = '/admin/alumni/kategori';
      var select = document.getElementById('year');
      select.addEventListener('change', function(){
        var year = select.options[select.selectedIndex].text;
        url = url + '?year='+year;
        window.location = url;
      });
    </script>
@endsection