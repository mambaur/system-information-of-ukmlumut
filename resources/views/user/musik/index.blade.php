@extends('user.layout.post')

@section('title', 'Bidang Musik UKM LUMUT')

@section('sub-title', 'Bidang Musik UKM LUMUT')

@section('description', 'Informasi seputar bidang Musik UKM LUMUT')

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
@if (count($artikel))
<section class="section" id="blog">
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($artikel as $item)
            <div class="col-lg-4 col-md-6">
                <div class="blog-box">
                    <div class="blog-img-box">
                        <img src="/assets/admin/images/artikel/{{$item->image}}" alt="" class="img-fluid blog-img">
                    </div>
                    <div class="single-blog">
                        <div class="blog-content">
                            <h6> {{$item->created_at}}</h6>
                            <a href="/bidang/musik/artikel/{{$item->id}}">
                                <h3 class="card-title">{{$item->judul}}</h3>
                            </a>
                            <p>
                                {!! \Illuminate\Support\Str::words($item->konten, 10,'....') !!}
                            </p>
                            <a href="/bidang/musik/artikel/{{$item->id}}" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="d-flex justify-content-center mt-5">{{$artikel->links()}}</div>
    </div>
</section>
@endif
@endsection
