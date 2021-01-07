<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login SI UKM LUMUT - Politeknik Negeri Jember</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://brandio.io/envato/iofrm/html/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="https://brandio.io/envato/iofrm/html/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="https://brandio.io/envato/iofrm/html/css/iofrm-theme4.css">
</head>
<body>
    @if (session('status'))
    <div class="alert alert-danger alert-dismissible fade show mt-1 mb-0 mx-1" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
        <i class="fa fa-info mx-2"></i>
        <strong>Maaf!</strong> {{session('status')}}
    </div>
    @endif
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show mt-1 mb-0 mx-1" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
        <i class="fa fa-check mx-2"></i>
        <strong>Sukses!</strong> {{session('success')}}
    </div>
    @endif
    <div class="form-body">
        <div class="website-logo">
            <a href="index.html">
                <div class="logo">
                    <img class="logo-size" src="/assets/admin/images/Ukmlumut.png" alt="Logo UKM LUMUT">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="{{url('assets/admin/images/login/login-flat-design.svg')}}" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Selamat Datang di Sistem Informasi UKM LUMUT</h3>
                        <p>Organisasi kesenian yang bergerak dibidang Lukis, Musik, dan Tari.</p>
                        <div class="page-links">
                            <a href="" class="active">Login</a>
                        </div>
                        <form action="{{url('admin/auth/login')}}" method="post">
                            @csrf
                            <input class="form-control my-0 @error('username') is-invalid @enderror" type="email" name="username" placeholder="E-mail">
                            @error('username')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror

                            <input class="form-control mt-3 mb-0 @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password">
                            @error('password')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror

                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Login</button> Lupa password? <a href="forget4.html">Hubungi admin.</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://brandio.io/envato/iofrm/html/js/jquery.min.js"></script>
<script src="https://brandio.io/envato/iofrm/html/js/popper.min.js"></script>
<script src="https://brandio.io/envato/iofrm/html/js/bootstrap.min.js"></script>
<script src="https://brandio.io/envato/iofrm/html/js/main.js"></script>
</body>
</html>