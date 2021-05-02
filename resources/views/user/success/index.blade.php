@extends('user.layout.post')

@section('title', 'Sukses!')

@section('sub-title', 'Terimakasih')

@section('description')

    @php
        $route = "/pendaftaran-anggota/cetak?id=".session('id');

        if(session('type') == 'peminjaman'){
            $route = "/peminjaman-alat/cetak-bukti-peminjaman?id=".session('id');
        }
    @endphp
    {{session('status')}}
    <a class="d-block mt-3" target="_blank" href="{{$route}}"><button class="p-2 btn btn-white"><i class="fa fa-print"></i> {{session('cetak')}}</button></a>
    <a class="d-block mt-3" href="/"><button class="p-2 btn btn-white"><i class="fa fa-home"></i> Kembali ke beranda</button></a>
@endsection