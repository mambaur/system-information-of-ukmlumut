@extends('user.layout.post')

@section('title', 'Sukses!')

@section('sub-title', 'Terimakasih')

@section('description')

    @php
        $route = "/user/cetak?id=".session('id');

        if(session('type') == 'peminjaman'){
            $route = "/peminjaman-alat/cetak-bukti-peminjaman?id=".session('id');
        }
    @endphp
    {{session('status')}}
    <a class="d-block mt-3" target="_blank" href="/user/cetak?bukti={{session('id')}}"><button class="p-2 btn btn-white"><i class="fa fa-print"></i> {{session('cetak')}}</button></a>
@endsection