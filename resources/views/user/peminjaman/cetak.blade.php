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
    </style>
  </head>
  <body>
    <div class="container">
      <div class="mb-1 p-1">
        <div class="float-right">{{@$peminjaman->created_at}}</div>
        <div>
          <img style="width:50px" src="https://ukmlumut.com/assets/admin/images/lumut.png" alt="">
          <div class="" style="display: inline-block; margin-left:10px">
            <div class="h1 text-success">Bukti Peminjaman</div>
            <div class="h1">Perlengkapan UKM LUMUT</div>
          </div>
        </div>
        <hr>
        <div>
          <b>Kode pinjam</b> : {{@$peminjaman->kode_pinjam}}
        </div>
        <div>
          <b>Tanggal pinjam</b> : {{@$peminjaman->tanggal_pinjam}}
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
            <td>{{@$peminjaman->tanggal_keterangan}}</td>
          </tr>
        </table>
      </div>

      <div>
        <div class="" style="float: right; margin-top:50px; border-bottom:2px solid black;padding-bottom:80px;">
          {{date('l, d-m-Y')}}
        </div>
      </div>
    </div>
  </body>
</html>