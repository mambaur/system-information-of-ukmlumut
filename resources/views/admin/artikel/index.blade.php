@extends('admin.layout.main', ['menu' => 'artikel'])

@section('title', 'Informasi Artikel UKM LUMUT')

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
        <span class="text-uppercase page-subtitle">Components</span>
        <h3 class="page-title">Blog Posts</h3>
      </div>
    </div>
    <div class="mb-2">
      <a href="{{url('/admin/artikel/tambah')}}"><button class="btn btn-white">+ Tambah</button></a>
      <a href="/admin/artikel/tipe?bidang=Lukis"><button class="btn btn-white">Lukis</button></a>
      <a href="/admin/artikel/tipe?bidang=Musik"><button class="btn btn-white">Musik</button></a>
      <a href="/admin/artikel/tipe?bidang=Tari"><button class="btn btn-white">Tari</button></a>
    </div>
    <!-- End Page Header -->
    <div class="row">
      @foreach ($artikel as $item)
      <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
        <div class="card card-small card-post card-post--1">
          <div class="card-post__image" style="background-image: url('/assets/admin/images/artikel/{{$item->image}}');">
              <a href="#" class="card-post__category badge badge-pill badge-{{($item->bidang === 'Lukis' ? 'success' : ($item->bidang === 'Musik' ? 'primary' : 'warning'))}}">{{$item->bidang}}</a>
              <div class="card-post__author d-flex">
                <a href="#" class="card-post__author-avatar card-post__author-avatar--small" style="background-image: url('/assets/admin/images/artikel/user.jpg');"></a>
                <span class="mt-3 ml-2 text-muted">{{$item->penulis}}</span>
              </div>
          </div>
          <div class="card-body">
              <h5 class="card-title">
                <a class="text-fiord-blue" href="#">
                  <span class="text-warning">{{!$item->status ? '[DRAFT]' : ''}}</span> 
                  {{$item->judul}}
                </a>
              </h5>
              <span class="card-text d-inline-block">
                {!! \Illuminate\Support\Str::words($item->konten, 10,'....') !!}
              </span>
              <span class="text-muted m-0 p-0"><p>{{$item->created_at}}</span>
              <hr />
              <div class="float-right">
                <a href="/admin/artikel/edit/{{$item->id}}">
                  <button class="btn btn-white"><i class="material-icons">edit</i>Edit</button>
                </a>

                <form class="d-inline-block" method="post" action="/admin/artikel/{{$item->id}}">
                  @method('delete')
                  @csrf
                  <button type="submit" class="btn btn-white" onclick="return confirm('Apakah anda yakin ingin menghapus data {{$item->judul}}?');"><i class="material-icons">delete</i>Hapus</button>
                </form>
              </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    {{ $artikel->links() }}

    
    @if (!count($artikel))
        <div class="text-center m-5">Belum ada artikel, silahkan tambah terlebih dahulu.</div>
    @endif
</div>
@endsection