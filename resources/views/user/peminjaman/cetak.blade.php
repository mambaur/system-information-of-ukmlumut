<!doctype html>
<html class="no-js h-100" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cetak Bukti Peminjaman</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style type="text/css">
      body{
        color: rgba(0, 0, 0, 0.836)
      }
      .container{
        min-width: 720px;
        margin: 0 auto;
      }
      .card{
        /* box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.479); */
        border-radius: 10px;
        padding-top: 3px;
        padding-bottom: 3px;
        padding-left: 15px;
        padding-right: 15px;
        background-color: rgba(0, 0, 0, 0.075);
      }
      .m-1{
        margin:10px;
      }
      .p-1{
        padding: 10px;
      }
      .mb-1{
        margin-bottom: 10px;
      }
      .h1{
        font-size: 18px;
        font-style: bold;
      }

      #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
      }

      #customers td, #customers th {
        border: 1px solid #ddd;
        padding: 8px;
      }

      /* #customers tr:nth-child(even){background-color: #f2f2f2;} */

      #customers tr:hover {background-color: #ddd;}

      #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
      }
      .float-right{
        float: right;
      }
      .text-success{
        color:green;
      }

      .footer {
        position: fixed;
        left: 0;
        bottom: 10px;
        width: 100%;
        font-size: 13px;  
        /* background-color: red; */
        color: rgb(90, 90, 90);
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="mb-1 p-1">
        <div class="float-right" style="color:grey; font-style:italic; font-size:12px">
          {{Carbon\Carbon::parse(date(@$peminjaman->created_at))->translatedFormat('d F Y')}}
        </div>
        <div>
          <img style="width:50px" src="https://ukmlumut.com/assets/admin/images/lumut.png" alt="">
          <div class="" style="display: inline-block; margin-left:10px;">
            <div class="h1 text-success" style="font-size:18px">BUKTI PEMINJAMAN PERLENGKAPAN</div>
            <div class="h1" style="font-size:15px">UKM LUMUT - POLITEKNIK NEGERI JEMBER</div>
            <div style="font-size:8px; color:grey">Jl. Mastrip No.164, Krajan Timur, Sumbersari, Kec. Sumbersari, Kabupaten Jember, Jawa Timur 68121</div>
          </div>
        </div>
        <hr style="color:rgba(0, 0, 0, 0.116)">
        <div class="" style="margin-top:15px">
          <div>
            <b>Kode pinjam</b> : {{@$peminjaman->kode_pinjam}}
          </div>
          <div>
            <b>Tanggal pinjam</b> : {{@$peminjaman->tanggal_pinjam}}
          </div>
        </div>
      </div>

      <div class="" style="margin:10px;">
        <table id="customers">
          {{-- <tr>
            <th>Company</th>
            <th>Contact</th>
            <th>Country</th>
          </tr> --}}
          <tr>
            <td style="width: 30%">Nama Peminjam</td>
            <td>{{@$peminjaman->nama_peminjam}}</td>
          </tr>
          <tr>
            <td style="width: 30%">Email</td>
            <td>{{@$peminjaman->email}}</td>
          </tr>
          <tr>
            <td style="width: 30%">Instansi</td>
            <td>{{@$peminjaman->instansi}}</td>
          </tr>
          <tr>
            <td style="width: 30%">Acara</td>
            <td>{{@$peminjaman->acara}}</td>
          </tr>
          <tr>
            <td style="width: 30%">Tanggal pinjam</td>
            <td>{{@$peminjaman->tanggal_pinjam}}</td>
          </tr>
          <tr>
            <td style="width: 30%">Tanggal kembali</td>
            <td>{{@$peminjaman->tanggal_kembali}}</td>
          </tr>
          <tr>
            <td style="width: 30%">Keterangan</td>
            <td>{{@$peminjaman->keterangan}}</td>
          </tr>
          <tr>
            <td style="width: 30%">Perlengkapan</td>
            <td>
              @foreach ($perkap as $item)
                  {{@$item->nama_barang}}<br
              @endforeach
            </td>
          </tr>
        </table>
      </div>

      <div class=""  style="margin:10px;font-size:12px">
        * Dengan ini saya setuju dengan <a href="https://ukmlumut.com/peminjaman-alat/ketentuan">ketentuan</a> peminjaman alat di UKM LUMUT.
      </div>

      <div>
        <div class="" style="float: right; margin-top:50px; border-bottom:2px solid black;padding-bottom:80px;">
          {{Carbon\Carbon::parse(date('Y-m-d'))->translatedFormat('l, d F Y')}}
          <div class="">Peminjam,</div>
        </div>
      </div>

      
      <div class="footer">
        <hr style="color:rgba(0, 0, 0, 0.116)">
        Untuk info lebih lanjut, silahkan kunjungi <a href="https://ukmlumut.com">www.ukmlumut.com</a>
      </div>
    </div>
  </body>
</html>