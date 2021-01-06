@extends('user.layout.post')

@section('title', $artikel->judul)

@section('sub-title', $artikel->judul)

@section('description', $artikel->created_at)

@section('content')

@if (session('status'))
    <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
        <i class="fa fa-check mx-2"></i>
        <strong>Sukses!</strong> {{session('status')}}
    </div>
@endif

<!-- SECTIONS ===================== -->
<section class="section" id="single-project">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="project-lg-img">
                            <img src="/assets/admin/images/artikel/{{$artikel->image}}" alt="" class="img-fluid w-100">
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg">
                        <div class="project-single-info">
                            <p>{!!$artikel->konten!!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
