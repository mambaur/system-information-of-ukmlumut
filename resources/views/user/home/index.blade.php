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
                            Organisasi Kesenian Lukis Musik Tari
                        </h1>

                        <!-- Subheading -->
                        <p class="lead mb-5 pr-0">
                            UKM LUMUT merupakan organisasi yang bergerak dibidang kesenian yang berada dibawah naungan Politeknik Negeri Jember.
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
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="text-center bg-transparent card mr-2 p-2">
                        <div class="mb-4">
                            <i style="font-size:70px" class="fas fa-palette mt-3"></i>
                        </div>
                        <h2 class="mb-2 text-secondary">Lukis</h2>
                        <p>Realisme, Mural, Scribbe,<br/>Grafiti, Kartun.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="text-center bg-transparent card mr-2 p-2">
                        <div class="mb-4">
                            <i style="font-size:70px" class="fas fa-guitar mt-3"></i>
                        </div>
                        <h2 class="mb-2 text-secondary">Musik</h2>
                        <p>Jazz, Pop, Blues, Raggae,<br/>Hip Hop, Klasik.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="text-center bg-transparent card mr-2 p-2">
                        <div class="mb-4">
                            <i style="font-size:70px" class="fas fa-users mt-3"></i>
                        </div>
                        <h2 class="mb-2 text-secondary">Tari</h2>
                        <p>Tradisional, Modern,<br/>Kontemporer.</p>
                    </div>
                </div>
            </div>
        </div> <!-- / .container -->
    </section>


<section class="bg-grey" id="service">
        <div class="container">
            <div class="row ">
                <div class="col-lg-4">
                    <div class="service-img">
                        <img src="/assets/user/images/blog-lg.jpg" alt="" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6 pl-4">
                    <div class="service-content">
                        <h1>Selamat Datang di Website Resmi UKM LUMUT</h1>
                        <p>UKM LUMUT memiliki 5 (lima) Program kerja wajib antara lain Diklat (Pendidikan dan Latihan), Aplikasi, Dies Natalis, Depresi (Demo Apresiasi Seni), dan RAT (Rapat Anggota Tahunan).</p>
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
                                                    <p>Pendidikan dan pelatihan untuk calon anggota baru UKM LUMUT.</p>
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
                                                    <p>Penampilan lukis, musik, dan tari anggota baru UKM LUMUT.</p>
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
                                                    <p>Merayakan hari lahir UKM Lumut yang jatuh pada tanggal 20 Juni 1996.</p>
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
                                                    <p>Depresi merupakan Demo Apresiasi Seni, acara besar penampilan lukis, musik, dan tari UKM LUMUT.</p>
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
                                                    <p>Rapat Anggota Tahunan.</p>
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
                        <img src="/assets/user/images/pkkmb.jpg" alt="" class="img-fluid">

                        <h3>PKKMB Polije</h3>
                        <p>Mengisi acara Demo UKM di PKKMB Politeknik Negeri Jember.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="process-block">
                        <img src="/assets/user/images/tmii.jpg" alt="" class="img-fluid">

                        <h3>TMII Jakarta</h3>
                        <p>Penampilan acara kesenian di Taman Mini Indonesia Indah.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="process-block">
                        <img src="/assets/user/images/depresi.jpg" alt="" class="img-fluid">

                        <h3>Depresi UKM LUMUT</h3>
                        <p>Proses acara Demo Apresiasi Seni di Gor Perjuangan'45 Politeknik Negeri Jember.</p>
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
                    <img class="d-block w-100" src="/assets/user/images/slider/pkkmb.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block bg-dark">
                        <h1 class="text-light">PKKMB UKM LUMUT 2021</h1>
                        <h4 class="text-light">Membuat video karya seni gabungan lukis musik dan tari</h4>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="/assets/user/images/slider/aplikasi.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block bg-dark">
                        <h1 class="text-light">APLIKASI UKM LUMUT</h1>
                        <h4 class="text-light">Acara Aplikasi UKM LUMUT Angkatan 23</h4>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="/assets/user/images/slider/diesnat.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block bg-dark">
                        <h1 class="text-light">Diesnatalis UKM LUMUT</h1>
                        <h4 class="text-light">Diadakan di kafe kedai rilex Jember</h4>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="/assets/user/images/slider/ngabuburit.jpg" alt="Fourth slide">
                    <div class="carousel-caption d-none d-md-block bg-dark">
                        <h1 class="text-light">Ngabuburit UKM LUMUT</h1>
                        <h4 class="text-light">Setiap bulan puasa, UKM LUMUT selalu mengadakan ngabuburit</h4>
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
                <iframe class="w-100" height="640" src="https://www.youtube.com/embed/QAAnBEEcXn4" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </section>

<section class="section" id="projects-wrap">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h1 class="text-white">"Seni adalah hidupku, Hidupku adalah seni"</h1>
                    </div>
                </div>
                <div class="col-lg-6">
                    <p class="lead text-white">Kami adalah salah satu Organisasi Kesenian di Politeknik Negeri Jember yang bergerak dalam pengembangan kesenian lukis musik tari. Selain itu, kami juga selalu menjunjung tinggi nilai kekeluargaan dan kebersamaan.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="section-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-6 mb-5">
                    <div class="single-project">
                        <img src="/assets/user/images/projects/p-1.jpg" alt="" class="img-fluid">
                        <div class="project-content">
                            <h4>Lomba Lukis</h4>
                            <p>Lomba lukis pada acara Musabaqah Tilawatil Quran</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-5">
                    <div class="single-project">
                        <img src="/assets/user/images/projects/p-4.jpg" alt="" class="img-fluid">
                        <div class="project-content">
                            <h4>Diesnatalis UKM LUMUT 2021</h4>
                            <p>Tasyakuran memperingati hari lahir UKM LUMUT</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8 ">
                    <div class="single-project">
                        <img src="/assets/user/images/projects/p-3.jpg" alt="" class="img-fluid">
                        <div class="project-content">
                            <h4>Sosialisasi</h4>
                            <p>Sosialisasi RAT pada tahun 2020 di kafe Anglo</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row py-4">
                <div class="col-lg-7 col-md-12 col-sm-12 ">
                    <div class="single-project">
                        <img src="/assets/user/images/bg/banner_bg.jpg" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 ">
                    <div class="project-content-block">
                        <h4>Jadi gimana di UKM LUMUT?</h4>
                        <h2>Kami lebih dari sekedar Organisasi</h2>
                        <p>Anggota UKM Lumut selalu beraktifitas dalah kesenian dan keorganisasian yang tidak lepas dari nilai-nilai kekeluargaan, kreatifitas, dan solidaritas.</p>
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