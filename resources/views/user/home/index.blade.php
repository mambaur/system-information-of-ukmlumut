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
                    <div class="text-center">
                        <div class="mb-4">
                            <i style="font-size:70px" class="fas fa-palette"></i>
                        </div>
                        <h4 class="mb-2">Lukis</h4>
                        <p>Realisme, Mural, Scribbe, Grafiti, Kartun.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="text-center ">
                        <div class="mb-4">
                            <i style="font-size:70px" class="fas fa-guitar"></i>
                        </div>
                        <h4 class="mb-2">Musik</h4>
                        <p>Jazz, Pop, Blues, Raggae, Hip Hop.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="text-center">
                        <div class="mb-4">
                            <i style="font-size:70px" class="fas fa-users"></i>
                        </div>
                        <h4 class="mb-2">Tari</h4>
                        <p>Tradisional, Modern, Kontemporer.</p>
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
                        <h1>Program Kerja UKM LUMUT</h1>
                        <p>Program kerja wajib UKM LUMUT yaitu Diklat (Pendidikan dan Latihan), Aplikasi, Dies Natalis, Depresi (Demo Apresiasi Seni), dan RAT (Rapat Anggota Tahunan).</p>
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
                                                    <i class="ti-reload"></i>
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
                                                    <i class="ti-cloud"></i>
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
                                                    <i class="ti-server"></i>
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
                        <img src="/assets/user/images/process/process-1.jpg" alt="" class="img-fluid">

                        <h3>Project Research</h3>
                        <p>Nihil facere delectus eaque aut possimus nobis laudantium reprehenderit.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="process-block">
                        <img src="/assets/user/images/process/process-2.jpg" alt="" class="img-fluid">

                        <h3>Project demostration</h3>
                        <p>Nihil facere delectus eaque aut possimus nobis laudantium reprehenderit.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="process-block">
                        <img src="/assets/user/images/process/process-3.jpg" alt="" class="img-fluid">

                        <h3>Development & delivery</h3>
                        <p>Nihil facere delectus eaque aut possimus nobis laudantium reprehenderit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


<section class="section" id="services-2">
        <div class="container">
            <div class="row justify-content-center">
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
            </div> <!-- / .row -->

            <div class="row">
                <div class="col-lg-4 col-sm-6 col-md-6 mb-30">
                    <div class="web-service-block">
                        <i class="ti-light-bulb"></i>
                        <h3>Creative Design</h3>
                        <p>Afraid we praise lively he suffer family estate is. Ample order up in of in ready. Timed blind had .</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6 mb-30">
                    <div class="web-service-block">
                        <i class="ti-desktop"></i>
                        <h3>Web Development</h3>
                        <p>Afraid we praise lively he suffer family estate is. Ample order up in of in ready. Timed blind had .</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6 mb-30">
                    <div class="web-service-block">
                        <i class="ti-announcement"></i>
                        <h3>Digital Marketing</h3>
                        <p>Afraid we praise lively he suffer family estate is. Ample order up in of in ready. Timed blind had .</p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-md-6 ">
                    <div class="web-service-block">
                        <i class="ti-layers-alt"></i>
                        <h3>Graphic Design</h3>
                        <p>Afraid we praise lively he suffer family estate is. Ample order up in of in ready. Timed blind had .</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6 ">
                    <div class="web-service-block">
                        <i class="ti-mobile"></i>
                        <h3>App Development</h3>
                        <p>Afraid we praise lively he suffer family estate is. Ample order up in of in ready. Timed blind had .</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6 ">
                    <div class="web-service-block">
                        <i class="ti-settings"></i>
                        <h3>Wordpress Installation</h3>
                        <p>Afraid we praise lively he suffer family estate is. Ample order up in of in ready. Timed blind had .</p>
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
                            Affordable Price Plan
                        </h2>

                        <!-- Subheading -->
                        <p>
                            Rapoo can be used to create anything from a small marketing page to a sophisticated website.
                        </p>
                    </div>
                </div>
            </div> <!-- / .row -->

            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="pricing-box">
                    <h3>Stnadard</h3>
                        <div class="price-block">
                            <h2><small>$</small>13<span>monthly</span></h2>
                        </div>

                        <ul class="price-features list-unstyled">
                            <li>Unlimited Domain</li>
                            <li>Unmetered Bandwidth</li>
                            <li>Free SSL Certificate </li>
                            <li>20 Email Subscription</li>
                            <li>SSD Hosting</li>
                        </ul>

                        <a href="#" class="btn btn-outline-dark btn-circled">Purchase Now</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="pricing-box">
                        <h3>Premium</h3>
                        <div class="price-block">
                            <h2><small>$</small>23<span>monthly</span></h2>
                        </div>

                        <ul class="price-features list-unstyled">
                            <li>Unlimited Domain</li>
                            <li>Unmetered Bandwidth</li>
                            <li>Free SSL Certificate </li>
                            <li>20 Email Subscription</li>
                            <li>SSD Hosting</li>
                        </ul>

                        <a href="#" class="btn btn-primary btn-circled">Purchase Now</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-8 col-md-6">
                    <div class="pricing-box ">
                        <h3>Business</h3>
                        <div class="price-block">
                            <h2><small>$</small>33<span>monthly</span></h2>
                        </div>

                        <ul class="price-features list-unstyled">
                            <li>Unlimited Domain</li>
                            <li>Unmetered Bandwidth</li>
                            <li>Free SSL Certificate </li>
                            <li>20 Email Subscription</li>
                            <li>SSD Hosting</li>
                        </ul>

                        <a href="#" class="btn btn-outline-dark btn-circled">Purchase Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="section" id="projects-wrap">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h1 class="text-white">We are trying to deliver 100% quality product and success their business to achieve ultimate goal.</h1>
                    </div>
                </div>
                <div class="col-lg-6">
                    <p class="lead text-white">We are providing best service since 1990 to present , committed to best service delivery.Nullam metus enim, placerat in lacus vel, porttitor egestas libero. Etiam ex risus, feugiat eget accumsan eu, sagittis eu urna. In eget ultrices metus. Nunc accumsan </p>
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
                            <h4>Project: onepage</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate eligendi consequuntur veniam quod</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-5">
                    <div class="single-project">
                        <img src="/assets/user/images/projects/p-4.jpg" alt="" class="img-fluid">
                        <div class="project-content">
                            <h4>Project: business</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate eligendi consequuntur veniam quod</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8 ">
                    <div class="single-project">
                        <img src="/assets/user/images/projects/p-3.jpg" alt="" class="img-fluid">
                        <div class="project-content">
                            <h4>Project : Marketing</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate eligendi consequuntur veniam quod</p>
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
                        <h4>Do you know who we are?</h4>
                        <h2>More than just service your products...</h2>
                        <p>Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and we will give you a complete account of the system.</p>
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