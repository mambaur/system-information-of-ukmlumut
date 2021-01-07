<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="UKM LUMUT adalah organisasi kesenian yang bergerak dibidang Lukis, Musik, dan Tari dibawah naungan Politeknik Negeri Jember.">
  <meta name="keywords" content="ukm, organisasi, ukmlumut, ukm lumut, lumut, ukm seni, politeknik negeri jember, lukis, musik, tari, event, acara.">
  
  <meta name="author" content="UKM LUMUT">

  <title>UKM LUMUT - Lukis Musik Tari</title>

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="/assets/user/plugins/bootstrap/css/bootstrap.min.css">
  <!-- Animate Css -->
  <link rel="stylesheet" href="/assets/user/plugins/animate-css/animate.css">
  <!-- Icon Font css -->
  <link rel="stylesheet" href="/assets/user/plugins/fontawesome/css/all.css">
  <link rel="stylesheet" href="/assets/user/plugins/fonts/Pe-icon-7-stroke.css">
  <!-- Themify icon Css -->
  <link rel="stylesheet" href="/assets/user/plugins/themify/css/themify-icons.css">
  <!-- Slick Carousel CSS -->
  <link rel="stylesheet" href="/assets/user/plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="/assets/user/css/style.css">

</head>


<body id="top-header">


<!-- LOADER TEMPLATE -->
<div id="page-loader">
    <div class="loader-icon fa fa-spin colored-border"></div>
</div>
<!-- /LOADER TEMPLATE -->

     <!-- NAVBAR
    ================================================= -->
        
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top site-navigation main-nav navbar-togglable">
        <div class="container">
            <a class="navbar-brand" href="/">
                <h3>LUMUT</h3>
            </a>
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>

            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <!-- Links -->
                <ul class="navbar-nav ml-auto">
                        {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarWelcome" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Home
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarWelcome">
                                 <a class="dropdown-item " href="index.html">
                                    Home-1
                                </a>
                                <a class="dropdown-item " href="index-2.html">
                                    Home-2
                                </a> 
                                <a class="dropdown-item " href="index-3.html">
                                    Home-3
                                </a>
                                <a class="dropdown-item " href="index-4.html">
                                    Home-4
                                </a>
                            </div>
                        </li> --}}
                        <li class="nav-item ">
                            <a href="/" class="nav-link js-scroll-trigger">
                                Beranda
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="/bidang/lukis" class="nav-link js-scroll-trigger">
                                Lukis
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a href="/bidang/musik" class="nav-link js-scroll-trigger">
                                Musik
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a href="/bidang/tari" class="nav-link js-scroll-trigger">
                                Tari
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a href="/kontak" class="nav-link">
                                Kontak
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarWelcome" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Lainnya
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarWelcome">
                                 <a class="dropdown-item " href="/peminjaman-alat">
                                    Peminjaman Alat
                                </a>
                                <a class="dropdown-item " href="/kritik-dan-saran">
                                    Kritik & saran
                                </a> 
                            </div>
                        </li>
                    </ul>

                <ul class="ml-lg-auto list-unstyled m-0 nav-btn">
                    <li><a href="/pendaftaran-anggota" class="btn btn-trans-white btn-circled mt-1 px-5 py-2">Daftar</a></li>
                </ul>
            </div> <!-- / .navbar-collapse -->
        </div> <!-- / .Container -->
    </nav>

    @yield('content')

 <footer class="section " id="footer">
        <div class="overlay footer-overlay"></div>
        <!--Content -->
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-lg-4 col-sm-12">
                    <div class="footer-widget">
                        <!-- Brand -->
                        <a href="#" class="footer-brand text-white">
                            UKM LUMUT
                        </a>
                        <p>UKM LUMUT adalah organsisasi kesenian yang bergerak di bidang Lukis, Musik, dan Tari yang berada dibawah naungan <a href="https://www.polije.ac.id/" target="_blank">Politeknik Negeri Jember</a></p>
                    </div>
                </div>

                <div class="col-lg-3 ml-lg-auto col-sm-12">
                    <div class="footer-widget">
                        <h3>Menu</h3>
                        <!-- Links -->
                        <ul class="footer-links ">
                            <li>
                                <a href="#">
                                    Peminjaman alat
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Pendaftaran Anggota
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="col-lg-2 col-sm-6">
                    <div class="footer-widget">
                        <h3>Informasi</h3>
                        <!-- Links -->
                        <ul class="footer-links ">
                            <li>
                                <a href="#">
                                    Tentang
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Ketentuan Peminjaman
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Kritik & Saran
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-6">
                    <div class="footer-widget">
                        <h3>Sosial Media</h3>
                        <!-- Links -->
                        <ul class="list-unstyled footer-links">
                            <li><a href="https://www.facebook.com/ukm.lumut" target="_blank"><i class="fab fa-facebook-f"></i>Facebook</a></li>
                            <li>
                            <a href="https://twitter.com/ukmlumut" target="_blank"><i class="fab fa-twitter"></i>Twitter
                            </a>
                            <li><a href="https://www.instagram.com/ukmlumut/" target="_blank"><i class="fab fa-instagram"></i>Instagram
                            </a></li>
                            <li><a href="https://www.youtube.com/channel/UC2UnCnKe2qZsuEivuOhkorw" target="_blank"><i class="fab fa-youtube"></i>YouTube
                            </a></li>
                        </ul>
                    </div>
                </div>
            </div> <!-- / .row -->


            <div class="row text-right pt-5">
                <div class="col-lg-12">
                    <!-- Copyright -->
                    <p class="footer-copy ">
                        &copy; Copyright <span class="current-year">UKM LUMUT</span> All rights reserved.
                    </p>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </footer>


    <!--  Page Scroll to Top  -->

    <a class="scroll-to-top js-scroll-trigger" href="#top-header">
        <i class="fa fa-angle-up"></i>
    </a>


   


    <!-- 
    Essential Scripts
    =====================================-->

    
    <!-- Main jQuery -->
    <script src="/assets/user/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="/assets/user/plugins/bootstrap/js/popper.min.js"></script>
    <script src="/assets/user/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Slick Slider -->
    <script src="/assets/user/plugins/slick-carousel/slick/slick.min.js"></script>
    <script src="/assets/user/js/jquery.easing.1.3.js"></script>
    <!-- Map Js -->
    <script src="/assets/user/plugins/google-map/gmap3.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwIQh7LGryQdDDi-A603lR8NqiF3R_ycA"></script>

    <script src="/assets/user/js/form/contact.js"></script>
    <script src="/assets/user/js/theme.js"></script>

  </body>
  </html>
   