@extends('admin.layout.main')

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
      <button class="btn btn-white">Lukis</button>
      <button class="btn btn-white">Musik</button>
      <button class="btn btn-white">Tari</button>
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


    <div class="row">
      <div class="col-lg-6 col-sm-12 mb-4">
        <div class="card card-small card-post card-post--aside card-post--1">
          <div class="card-post__image" style="background-image: url('images/content-management/5.jpeg');">
            <a href="#" class="card-post__category badge badge-pill badge-info">Travel</a>
            <div class="card-post__author d-flex">
              <a href="#" class="card-post__author-avatar card-post__author-avatar--small" style="background-image: url('images/avatars/0.jpg');">Written by Anna Ken</a>
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title">
              <a class="text-fiord-blue" href="#">Attention he extremity unwilling on otherwise cars backwards yet</a>
            </h5>
            <p class="card-text d-inline-block mb-3">Conviction up partiality as delightful is discovered. Yet jennings resolved disposed exertion you off. Left did fond drew fat head poor jet pan flying over...</p>
            <span class="text-muted">29 February 2019</span>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-sm-12 mb-4">
        <div class="card card-small card-post card-post--aside card-post--1">
          <div class="card-post__image" style="background-image: url('images/content-management/6.jpeg');">
            <a href="#" class="card-post__category badge badge-pill badge-dark">Business</a>
            <div class="card-post__author d-flex">
              <a href="#" class="card-post__author-avatar card-post__author-avatar--small" style="background-image: url('images/avatars/1.jpg');">Written by Jamie James</a>
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title">
              <a class="text-fiord-blue" href="#">Totally words widow one downs few age every seven if miss part by fact</a>
            </h5>
            <p class="card-text d-inline-block mb-3">Discovered had get considered projection who favourable. Necessary up knowledge it tolerably. Unwilling departure education to admitted speaking...</p>
            <span class="text-muted">29 February 2019</span>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <div class="card card-small card-post mb-4">
          <div class="card-body">
            <h5 class="card-title">Had denoting properly jointure which well books beyond</h5>
            <p class="card-text text-muted"> In said to of poor full be post face snug. Introduced imprudence see say unpleasing devonshire acceptance son. Exeter longer...</p>
          </div>
          <div class="card-footer border-top d-flex">
            <div class="card-post__author d-flex">
              <a href="#" class="card-post__author-avatar card-post__author-avatar--small" style="background-image: url('images/avatars/1.jpg');">Written by James Khan</a>
              <div class="d-flex flex-column justify-content-center ml-3">
                <span class="card-post__author-name">James Khan</span>
                <small class="text-muted">21 March 2011</small>
              </div>
            </div>
            <div class="my-auto ml-auto">
              <a class="btn btn-sm btn-white" href="#">
                <i class="far fa-bookmark mr-1"></i> Bookmark </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card card-small card-post mb-4">
          <div class="card-body">
            <h5 class="card-title">Husbands ask repeated resolved but laughter debating</h5>
            <p class="card-text text-muted">It abode words began enjoy years no do ﻿no. Tried spoil as heart visit blush or. Boy possible blessing sensible set but margaret interest. Off tears...</p>
          </div>
          <div class="card-footer border-top d-flex">
            <div class="card-post__author d-flex">
              <a href="#" class="card-post__author-avatar card-post__author-avatar--small" style="background-image: url('images/avatars/2.jpg');">Written by Anna Kunis</a>
              <div class="d-flex flex-column justify-content-center ml-3">
                <span class="card-post__author-name">Chris Jones</span>
                <small class="text-muted">21 March 2011</small>
              </div>
            </div>
            <div class="my-auto ml-auto">
              <a class="btn btn-sm btn-white" href="#">
                <i class="far fa-bookmark mr-1"></i> Bookmark </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card card-small card-post mb-4">
          <div class="card-body">
            <h5 class="card-title">Instantly gentleman contained belonging exquisite now direction</h5>
            <p class="card-text text-muted">West room at sent if year. Numerous indulged distance old law you. Total state as merit court green decay he. Steepest merit checking railway...</p>
          </div>
          <div class="card-footer border-top d-flex">
            <div class="card-post__author d-flex">
              <a href="#" class="card-post__author-avatar card-post__author-avatar--small" style="background-image: url('images/avatars/3.jpg');">Written by Anna Kunis</a>
              <div class="d-flex flex-column justify-content-center ml-3">
                <span class="card-post__author-name">Mark Jameson</span>
                <small class="text-muted">21 March 2011</small>
              </div>
            </div>
            <div class="my-auto ml-auto">
              <a class="btn btn-sm btn-white" href="#">
                <i class="far fa-bookmark mr-1"></i> Bookmark </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
        <div class="card card-small card-post h-100">
          <div class="card-post__image" style="background-image: url('images/content-management/7.jpeg');"></div>
          <div class="card-body">
            <h5 class="card-title">
              <a class="text-fiord-blue" href="#">Extremity so attending objection as engrossed</a>
            </h5>
            <p class="card-text">Morning prudent removal an letters by. On could my in order never it. Or excited certain sixteen it to parties colonel not seeing...</p>
          </div>
          <div class="card-footer text-muted border-top py-3">
            <span class="d-inline-block">By
              <a class="text-fiord-blue" href="#">Alene Trenton</a> in
              <a class="text-fiord-blue" href="#">News</a>
            </span>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
        <div class="card card-small card-post h-100">
          <div class="card-post__image" style="background-image: url('images/content-management/8.jpeg');"></div>
          <div class="card-body">
            <h5 class="card-title">
              <a class="text-fiord-blue" href="#">Bed sincerity yet therefore forfeited his </a>
            </h5>
            <p class="card-text">Pursuit chamber as elderly amongst on. Distant however warrant farther to of. My justice wishing prudent waiting in be...</p>
          </div>
          <div class="card-footer text-muted border-top py-3">
            <span class="d-inline-block">By
              <a class="text-fiord-blue" href="#">Chris Jamie</a> in
              <a class="text-fiord-blue" href="#">News</a>
            </span>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
        <div class="card card-small card-post h-100">
          <div class="card-post__image" style="background-image: url('images/content-management/9.jpeg');"></div>
          <div class="card-body">
            <h5 class="card-title">
              <a class="text-fiord-blue" href="#">Object remark lively all did feebly excuse our</a>
            </h5>
            <p class="card-text">Speaking throwing breeding betrayed children my to. Me marianne no he horrible produced ye. Sufficient unpleasing and...</p>
          </div>
          <div class="card-footer text-muted border-top py-3">
            <span class="d-inline-block">By
              <a class="text-fiord-blue" href="#">Monica Jordan</a> in
              <a class="text-fiord-blue" href="#">News</a>
            </span>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
        <div class="card card-small card-post h-100">
          <div class="card-post__image" style="background-image: url('images/content-management/10.jpeg');"></div>
          <div class="card-body">
            <h5 class="card-title">
              <a class="text-fiord-blue" href="#">His followed carriage proposal entrance</a>
            </h5>
            <p class="card-text">For county now sister engage had season better had waited. Occasional mrs interested far expression directly as regard...</p>
          </div>
          <div class="card-footer text-muted border-top py-3">
            <span class="d-inline-block">By
              <a class="text-fiord-blue" href="#">Monica Jordan</a> in
              <a class="text-fiord-blue" href="#">News</a>
            </span>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection