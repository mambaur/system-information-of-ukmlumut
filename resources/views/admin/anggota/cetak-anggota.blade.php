<!doctype html>
<html class="no-js h-100" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cetak data anggota</title>
    <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="{{ asset('assets/admin/styles/shards-dashboards.1.1.0.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/styles/extras.1.1.0.min.css') }}">
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </head>
  <body class="h-100">


    <div class="container my-5">
        <button class="btn btn-outline-secondary font-weight-bold" onclick="printDiv()">
            <i class="material-icons mr-1">print</i> Cetak</button>
        <div class="cetak" id="cetak">
            <div class="text-center font-weight-bold mb-5">
                <h3 class="text-dark">DAFTAR {{strtoupper($title)}}</h3>
                <h5 class="text-dark">UKM LUMUT - POLITEKNIK NEGERI JEMBER {{date('Y')}}</h5>
            </div>
            <div class="d-inline-block mb-2">
                <div class="d-inline-block">
                    <span class="text-dark">Tanggal : </span> {{date('d-m-Y')}}
                </div>
            </div>
            <table class="table text-dark">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Data Anggota</th>
                    <th scope="col">Alamat</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($anggota as $item)
                        <tr>
                            <th scope="row" style="width:2%">{{$loop->iteration}}</th>
                            <td style="width:2%"><img src="/assets/admin/images/anggota/{{$item->foto}}" style="width:100px" alt="Foto {{$item->nama_anggota}}"></td>
                            <td>
                                <div><strong>Nama</strong> {{$item->nama_anggota}}</div>
                                <div><strong>Nal</strong> {{$item->nal}}</div>
                                <div><strong>Nim</strong> {{$item->nim}}</div>
                                <div><strong>Email</strong> {{$item->email}}</div>
                                <div><strong>TTL</strong> {{$item->tempat_lahir.', '.$item->tanggal_lahir}}</div>
                                <div><strong>Jurusan</strong> {{$item->jurusan.', '.$item->prodi}}</div>
                                <div><strong>Angkatan</strong> {{$item->angkatan}}</div>
                            </td>
                            <td style="width:20%">{{$item->alamat.', '.$item->kota.', '.$item->telp}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>

    <script>
    printDiv();

    function printDiv(){
        var printContents = document.getElementById('cetak').innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        // document.body.innerHTML = originalContents;
    }
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
    <script src="{{asset('assets/admin/scripts/extras.1.1.0.min.js')}}"></script>
    <script src="{{asset('assets/admin/scripts/shards-dashboards.1.1.0.min.js')}}"></script>
    <script src="{{asset('assets/admin/scripts/app/app-blog-overview.1.1.0.js')}}"></script>
  </body>
</html>