@extends('user.layout.post')

@section('title', 'Sukses!')

@section('sub-title', 'Terimakasih')

@section('description')
    {{session('status')}}
    <a class="d-block mt-3" target="_blank" href="/user/cetak?bukti={{session('id')}}"><button class="p-2 btn btn-white"><i class="fa fa-print"></i> {{session('cetak')}}</button></a>
@endsection