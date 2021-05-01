@extends('user.layout.main')

@section('content')
<!-- HERO
    ================================================== -->
<section class="banner-area py-5" id="banner-4">
    <div class="overlay feature-overlay"></div>
        <!-- Content -->
        <div class="container">
            <div class="row  align-items-center justify-content-center">
                <div class="col-md-12 col-lg-9">
                <div class="banner-content2 text-center style-2">
                        <!-- Heading -->
                        <h1 class="display-4 mb-4 ">
                            {{@$component->jumbotron_title}}
                        </h1>

                        <!-- Subheading -->
                        <p class="lead mb-5 pr-0">
                            {{@$component->jumbotron_desc}}
                        </p>

                        <!-- Button -->
                        <p class="mb-0">
                            <a href="#" target="_blank" class="btn btn-white btn-circled">
                                Get Started
                            </a>
                        </p>
                    </div>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>


    <section class="section bg-grey" id="feature">
        <div class="container">
            <div class="row justy-content-center">
                <div class="col-lg-4 col-sm-6 col-md-6 mb-3">
                    <div class="text-center bg-white mr-2 p-2" style="border-radius:25px;box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.144)">
                        <div class="mb-4">
                            <i style="font-size:70px" class="fas fa-palette text-success mt-3"></i>
                        </div>
                        <h2 class="mb-2">Lukis</h2>
                        <p>Realisme, Mural, Scribbe,<br/>Grafiti, Kartun.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-md-6 mb-3">
                    <div class="text-center bg-white mr-2 p-2" style="border-radius:25px;box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.144)">
                        <div class="mb-4">
                            <i style="font-size:70px" class="fas fa-guitar text-warning mt-3"></i>
                        </div>
                        <h2 class="mb-2">Musik</h2>
                        <p>Jazz, Pop, Blues, Raggae,<br/>Hip Hop, Klasik.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-sm-6 col-md-6 mb-3">
                    <div class="text-center bg-white mr-2 p-2" style="border-radius:25px;box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.144)">
                        <div class="mb-4">
                            <i style="font-size:70px" class="fas fa-users text-info mt-3"></i>
                        </div>
                        <h2 class="mb-2">Tari</h2>
                        <p>Tradisional, Modern,<br/>Kontemporer.</p>
                    </div>
                </div>
            </div>
        </div> <!-- / .container -->
    </section>

    <section id="service" class="p-3">
        <div class="container">
            <div class="row ">
                <div class="col-lg-4">
                    <div class="service-img">
                        <img src="/assets/user/images/{{@$component->widget_one_image}}" alt="" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6 pl-4">
                    <div class="service-content">
                        <h1>{{@$component->widget_one_title}}</h1>
                        <p>{{@$component->widget_one_desc}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-5 service-wrap">
        <div class="container">
            <div class="row ">
                <div class="col-lg-8 offset-lg-4">
                    <div class="carousel slide " id="service-carousel" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="service-block media">
                                                <div class="service-icon">
                                                    <i class="ti-world"></i>
                                                </div>
                                                <div class="service-inner-content media-body">
                                                    <h4>Diklat</h4>
                                                    <p>{{@$component->widget_one_oprec_desc}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="service-block media">
                                                <div class="service-icon">
                                                    <i class="ti-world"></i>
                                                </div>
                                                <div class="service-inner-content media-body">
                                                    <h4>Aplikasi</h4>
                                                    <p>{{@$component->widget_one_aplikasi_desc}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="service-block media">
                                                <div class="service-icon">
                                                    <i class="ti-world"></i>
                                                </div>
                                                <div class="service-inner-content media-body">
                                                    <h4>Dies Natalis</h4>
                                                    <p>{{@$component->widget_one_diesnat_desc}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="service-block media">
                                                <div class="service-icon">
                                                    <i class="ti-world"></i>
                                                </div>
                                                <div class="service-inner-content media-body">
                                                    <h4>Depresi</h4>
                                                    <p>{{@$component->widget_one_depresi_desc}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="carousel-item">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="service-block media">
                                                <div class="service-icon">
                                                    <i class="ti-world"></i>
                                                </div>
                                                <div class="service-inner-content media-body">
                                                    <h4>RAT</h4>
                                                    <p>{{@$component->widget_one_rat_desc}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            {{-- <p class="pl-3">Want to know more about this? <a href="#">Contact us</a></p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="process">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 text-center">
                    <div class="section-heading">
                        <!-- Heading -->
                        <h2 class="section-title">
                            Berproses Bersama
                        </h2>

                        <!-- Subheading -->
                        <p>
                            Serunya kebersamaan berproses di UKM LUMUT.
                        </p>

                    </div>
                </div>
            </div> <!-- / .row -->

            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="process-block">
                        <img src="/assets/user/images/{{@$component->widget_two_list_1_image}}" alt="" class="img-fluid">

                        <h3>{{@$component->widget_two_list_1_title}}</h3>
                        <p>{{@$component->widget_two_list_1_desc}}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="process-block">
                        <img src="/assets/user/images/{{@$component->widget_two_list_2_image}}" alt="" class="img-fluid">

                        <h3>{{@$component->widget_two_list_2_title}}</h3>
                        <p>{{@$component->widget_two_list_2_desc}}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="process-block">
                        <img src="/assets/user/images/{{@$component->widget_two_list_3_image}}" alt="" class="img-fluid">

                        <h3>{{@$component->widget_two_list_3_title}}</h3>
                        <p>{{@$component->widget_two_list_3_desc}}</p>
                    </div>
                </div>
            </div>

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="/assets/user/images/slider/{{@$component->widget_two_slider_1_image}}" alt="First slide">
                    <div class="carousel-caption d-none d-md-block bg-dark">
                        <h1 class="text-light">{{@$component->widget_two_slider_1_title}}</h1>
                        <h4 class="text-light">{{@$component->widget_two_slider_1_desc}}</h4>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="/assets/user/images/slider/{{@$component->widget_two_slider_2_image}}" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block bg-dark">
                        <h1 class="text-light">{{@$component->widget_two_slider_2_title}}</h1>
                        <h4 class="text-light">{{@$component->widget_two_slider_2_desc}}</h4>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="/assets/user/images/slider/{{@$component->widget_two_slider_3_image}}" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block bg-dark">
                        <h1 class="text-light">{{@$component->widget_two_slider_3_title}}</h1>
                        <h4 class="text-light">{{@$component->widget_two_slider_3_desc}}</h4>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="/assets/user/images/slider/{{@$component->widget_two_slider_4_image}}" alt="Fourth slide">
                    <div class="carousel-caption d-none d-md-block bg-dark">
                        <h1 class="text-light">{{@$component->widget_two_slider_4_title}}</h1>
                        <h4 class="text-light">{{@$component->widget_two_slider_4_desc}}</h4>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>


<section class="section" id="services-2">
        <div class="container">
            {{-- <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 text-center">
                    <div class="section-heading">
                        <!-- Heading -->
                        <h2 class="section-title mb-2 text-white">
                            Web Services
                        </h2>

                        <!-- Subheading -->
                        <p class="mb-5 text-white">
                            Rapoo can be used to create anything from a small marketing page to a sophisticated website.
                        </p>
                    </div>
                </div>
            </div>  --}}
            <!-- / .row -->

            <div class="row">
                <div class="col-lg-4 col-sm-6 col-md-6 mb-30">
                    <div class="web-service-block">
                        <i class="ti-light-bulb"></i>
                        <h3>Pendaftaran Anggota</h3>
                        <p>Tertarik bergabung dengan UKM LUMUT? tunggu apa lagi, yuk klik link dibawah ini dan isi form pendaftaran langsung.</p>
                        <a href="/pendaftaran-anggota" target="_blank"><button class="btn btn-white">Daftar sekarang</button></a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6 mb-30">
                    <div class="web-service-block">
                        <i class="ti-desktop"></i>
                        <h3>Peminjaman Alat</h3>
                        <p>Kami menyediakan peminjaman alat untuk mendukung kesuksesan acara yang ingin kamu buat.</p>
                        <a href="/peminjaman-alat" target="_blank"><button class="btn btn-white">Peminjaman alat</button></a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6 mb-30">
                    <div class="web-service-block">
                        <i class="ti-announcement"></i>
                        <h3>Kritik & Saran</h3>
                        <p>Berikan pendapat dan aspirasimu tentang segala hal di UKM LUMUT, kami tunggu kritik dan saran kamu dengan senang hati.</p>
                        <a href="/kritik-dan-saran" target="_blank"><button class="btn btn-white">Kritik & saran</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section class="section" id="pricing">
        <!-- Content -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 text-center">
                    <div class="section-heading">
                        <!-- Heading -->
                        <h2 class="section-title">
                            Channel Youtube UKM LUMUT
                        </h2>

                        <!-- Subheading -->
                        <p>
                            Jangan lupa subscribe dan ikuti terus channel youtube UKM LUMUT agar kamu tidak ketinggalan update dan info terbaru dari UKM lUMUT.
                        </p>
                    </div>
                </div>
            </div> <!-- / .row -->

            <div class="row justify-content-center">
                <iframe class="w-100" height="640" src="{{@$component->youtube_url}}" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </section>

<section class="section" id="projects-wrap">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h1 class="text-white">{{@$component->widget_three_title}}</h1>
                    </div>
                </div>
                <div class="col-lg-6">
                    <p class="lead text-white">{{@$component->widget_three_desc}}</p>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="section-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-6 mb-5">
                    <div class="single-project">
                        <img src="/assets/user/images/projects/{{@$component->widget_three_list_1_image}}" alt="" class="img-fluid">
                        <div class="project-content">
                            <h4>{{@$component->widget_three_list_1_title}}</h4>
                            <p>{{@$component->widget_three_list_1_desc}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-5">
                    <div class="single-project">
                        <img src="/assets/user/images/projects/{{@$component->widget_three_list_2_image}}" alt="" class="img-fluid">
                        <div class="project-content">
                            <h4>{{@$component->widget_three_list_2_title}}</h4>
                            <p>{{@$component->widget_three_list_2_desc}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8 ">
                    <div class="single-project">
                        <img src="/assets/user/images/projects/{{@$component->widget_three_list_3_image}}" alt="" class="img-fluid">
                        <div class="project-content">
                            <h4>{{@$component->widget_three_list_3_title}}</h4>
                            <p>{{@$component->widget_three_list_3_desc}}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row py-4">
                <div class="col-lg-7 col-md-12 col-sm-12 ">
                    <div class="single-project">
                        <img src="/assets/user/images/bg/{{@$component->widget_three_main_image}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 ">
                    <div class="project-content-block">
                        <h4>Jadi gimana di UKM LUMUT?</h4>
                        <h2>{{@$component->widget_three_main_title}}</h2>
                        <p>{{@$component->widget_three_main_desc}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="section" id="section-testimonial">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-sm-12 col-md-12">
                    <div class="section-heading testimonial-heading">
                        <h1>Jajaran Pengurus <br>UKM LUMUT</h1>
                        <p>Pengurus UKM LUMUT Tahun {{date('Y')}}</p>
                    </div>
                </div>
                <div class="col-lg-9 col-sm-12 col-md-12">
                    <div class="row">
                        @foreach ($user as $item)
                        <div class="col-lg-4 ">
                            <div class="test-inner p-0">
                                <div class="test-author-thumb d-flex">
                                    <img src="/assets/admin/images/akun/{{$item->image}}" alt="Testimonial author" class="img-fluid">
                                    <div class="test-author-info">
                                        <h4>{{$item->name.' '.$item->nama_belakang}}</h4>
                                        <h6>{{$item->jabatan}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if (count($artikel))
    <section class="section" id="blog">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 text-center">
                    <div class="section-heading">
                        <!-- Heading -->
                        <h2 class="section-title">
                            Artikel Terbaru UKM LUMUT
                        </h2>

                        <!-- Subheading -->
                        <p>
                            Informasi terbaru seputar UKM LUMUT
                        </p>
                    </div>
                </div>
            </div> <!-- / .row -->

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
                                <a href="#">
                                    <h3 class="card-title">{{$item->judul}}</h3>
                                </a>
                                <p>
                                    {!! \Illuminate\Support\Str::words($item->konten, 10,'....') !!}
                                </p>
                                <a href="/bidang/{{strtolower($item->bidang)}}/artikel/{{$item->id}}" class="read-more" target="_blank">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif
@endsection