<!doctype html>
<html class="no-js h-100" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="UKM LUMUT adalah organisasi kesenian yang bergerak di bidang lukis, musik, dan tari dan berada dibawah naungan Politeknik Negeri Jember">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="icon" type="image/png" href="{{url('/')}}/assets/admin/images/lumut-admin.png"/>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="{{ asset('assets/admin/styles/shards-dashboards.1.1.0.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/styles/extras.1.1.0.min.css') }}">
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    @yield('head')
  </head>
  <body class="h-100">
    {{-- <div class="color-switcher-toggle animated pulse infinite">
      <i class="material-icons">settings</i>
    </div> --}}
    <div class="container-fluid">
      <div class="row">
        <!-- Main Sidebar -->
        <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
          <div class="main-navbar">
            <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
              <a class="navbar-brand w-100 mr-0" href="/admin" style="line-height: 25px;">
                <div class="d-table m-auto d-flex">
                  <img id="main-logo" class="d-inline-block align-top mr-1" style="width: 30px;height:30px" src="{{asset('assets/admin/images/lumut.png')}}" alt="Shards Dashboard">
                  {{-- <span class="mr-1 text-secondary align-self-end">SIUKM</span> --}}
                  <img id="main-logo" class="d-inline-block align-top mr-1" style="width: 70px;" src="{{asset('assets/admin/images/lmt-logo.jpg')}}" alt="Shards Dashboard">
                </div>
              </a>
              <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                <i class="material-icons">&#xE5C4;</i>
              </a>
            </nav>
          </div>
          {{-- <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
            <div class="input-group input-group-seamless ml-3">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fas fa-search"></i>
                </div>
              </div>
              <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search"> </div>
          </form> --}}
          <div class="nav-wrapper">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link {{$menu === 'home' ? 'active' : ''}}" href="{{url('/admin')}}">
                  <i class="material-icons">dashboard</i>
                  <span>LMT Dashboard</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{$menu === 'anggota' ? 'active' : ''}}" href="{{url('admin/anggota')}}">
                  <i class="material-icons">vertical_split</i>
                  <span>Anggota</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{$menu === 'perlengkapan' ? 'active' : ''}}" href="{{url('admin/perlengkapan')}}">
                  <i class="material-icons">work_outline</i>
                  <span>Perlengkapan</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{$menu === 'alumni' ? 'active' : ''}}" href="{{url('admin/alumni')}}">
                  <i class="material-icons">view_module</i>
                  <span>Data Alumni</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{$menu === 'artikel' ? 'active' : ''}}" href="{{url('admin/artikel')}}">
                  <i class="material-icons">library_books</i>
                  <span>Artikel</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{$menu === 'recruitmen' ? 'active' : ''}}" href="{{url('admin/recruitmen')}}">
                  <i class="material-icons">addchart</i>
                  <span>Recruitmen</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{$menu === 'pesan' ? 'active' : ''}}" href="{{url('admin/pesan')}}">
                  <i class="material-icons">question_answer</i>
                  <span>Kritik & saran</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{$menu === 'akun' ? 'active' : ''}}" href="{{url('admin/akun')}}">
                  <i class="material-icons">person</i>
                  <span>Akun</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{$menu === 'info-organisasi' ? 'active' : ''}}" href="{{url('admin/info-organisasi')}}">
                  <i class="material-icons">info</i>
                  <span>Info Organisasi</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{$menu === 'component' ? 'active' : ''}}" href="{{url('admin/component')}}">
                  <i class="material-icons">extension</i>
                  <span>Component</span>
                </a>
              </li>
              @if (\Auth::user()->role === 'Master')
              <li class="nav-item">
                <a class="nav-link {{$menu === 'kelola_admin' ? 'active' : ''}}" href="{{url('admin/kelola-admin')}}">
                  <i class="material-icons">supervisor_account</i>
                  <span>Kelola admin</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{$menu === 'log_user' ? 'active' : ''}}" href="{{url('admin/log-login')}}">
                  <i class="material-icons">hourglass_full</i>
                  <span>Log user</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{$menu === 'pengaturan' ? 'active' : ''}}" href="{{url('admin/pengaturan')}}">
                  <i class="material-icons">settings</i>
                  <span>Pengaturan</span>
                </a>
              </li>
              @endif
            </ul>
          </div>
        </aside>
        <!-- End Main Sidebar -->
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
          <div class="main-navbar sticky-top bg-white">
            <!-- Main Navbar -->
            <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
              <form action="#" class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">
                {{-- <div class="input-group input-group-seamless ml-3">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fas fa-search"></i>
                    </div>
                  </div>
                  <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search"> </div> --}}
              </form>
              <ul class="navbar-nav border-left flex-row ">
                {{-- <li class="nav-item border-right dropdown notifications">
                  <a class="nav-link nav-link-icon text-center" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="nav-link-icon__wrapper">
                      <i class="material-icons">&#xE7F4;</i>
                      <span class="badge badge-pill badge-danger">2</span>
                    </div>
                  </a>
                  <div class="dropdown-menu dropdown-menu-small" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">
                      <div class="notification__icon-wrapper">
                        <div class="notification__icon">
                          <i class="material-icons">&#xE6E1;</i>
                        </div>
                      </div>
                      <div class="notification__content">
                        <span class="notification__category">Analytics</span>
                        <p>Your website’s active users count increased by
                          <span class="text-success text-semibold">28%</span> in the last week. Great job!</p>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#">
                      <div class="notification__icon-wrapper">
                        <div class="notification__icon">
                          <i class="material-icons">&#xE8D1;</i>
                        </div>
                      </div>
                      <div class="notification__content">
                        <span class="notification__category">Sales</span>
                        <p>Last week your store’s sales count decreased by
                          <span class="text-danger text-semibold">5.52%</span>. It could have been worse!</p>
                      </div>
                    </a>
                    <a class="dropdown-item notification__all text-center" href="#"> View all Notifications </a>
                  </div>
                </li> --}}
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img style="object-position: center;object-fit: cover;width:40px;height: 40px;" class="user-avatar rounded-circle mr-2" src="/assets/admin/images/akun/{{\Auth::user()->image}}" alt="User Avatar">
                    <span class="d-none d-md-inline-block">
                      {{\Auth::user()->name .' '. \Auth::user()->nama_belakang}}
                    </span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-small">
                    <a class="dropdown-item" href="{{url('admin/akun')}}">
                      <i class="material-icons">&#xE7FD;</i> Profil</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="{{url('admin/logout')}}">
                      <i class="material-icons text-danger">&#xE879;</i> Logout </a>
                  </div>
                </li>
              </ul>
              <nav class="nav">
                <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                  <i class="material-icons">&#xE5D2;</i>
                </a>
              </nav>
            </nav>
          </div>
          
        
            @yield('container')

          <footer class="main-footer d-flex p-2 px-3 bg-white border-top">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="/admin">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/admin/anggota">Anggota</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" target="_blank" href="/">Halaman depan</a>
              </li>
            </ul>
            <span class="copyright ml-auto my-auto mr-2">Copyright © {{date('Y')}}
              <a href="/" rel="nofollow">UKM LUMUT</a>
            </span>
          </footer>
        </main>
      </div>
    </div>
    {{-- <div class="promo-popup animated">
      <a href="http://bit.ly/shards-dashboard-pro" class="pp-cta extra-action">
        <img src="https://dgc2qnsehk7ta.cloudfront.net/uploads/sd-blog-promo-2.jpg"> </a>
      <div class="pp-intro-bar"> Info UKM LUMUT?
        <span class="close">
          <i class="material-icons">close</i>
        </span>
        <span class="up">
          <i class="material-icons">keyboard_arrow_up</i>
        </span>
      </div>
      <div class="pp-inner-content">
        <h2>Shards Dashboard Pro</h2>
        <p>A premium & modern Bootstrap 4 admin dashboard template pack.</p>
        <a class="pp-cta extra-action" href="http://bit.ly/shards-dashboard-pro">Download</a>
      </div>
    </div> --}}
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
    <script src="{{asset('assets/admin/scripts/extras.1.1.0.min.js')}}"></script>
    <script src="{{asset('assets/admin/scripts/shards-dashboards.1.1.0.min.js')}}"></script>
    <script src="{{asset('assets/admin/scripts/app/app-blog-overview.1.1.0.js')}}"></script>
    <script>
      setInterval(function(){
        peminjamanTerlambat();
      }, 5000);

      function peminjamanTerlambat(){
        var httpRequest = new XMLHttpRequest();
        httpRequest.open("GET", "/admin/perlengkapan/check-peminjaman-terlambat", true);
        httpRequest.send();
      }
    </script>

    @yield('script')
  </body>
</html>