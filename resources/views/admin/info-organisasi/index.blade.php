@extends('admin.layout.main', ['menu' => 'info-organisasi'])

@section('title', 'Informasi Organisasi UKM LUMUT')

@section('container')
@if (session('status'))
    <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
        <i class="fa fa-check mx-2"></i>
        <strong>Sukses!</strong> {{session('status')}}
    </div>
@endif
<!-- / .main-navbar -->
<div class="main-content-container container-fluid px-4">
<!-- Page Header -->
<div class="page-header row no-gutters py-4">
  <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
    <span class="text-uppercase page-subtitle">Overview</span>
    <h3 class="page-title">Info Organisasi</h3>
  </div>
</div>

<div class="row">
    <div class="col-sm-9 table-responsive">
        <table class="table">
            <tbody>
                @foreach ($info_organisasi as $item)
                <tr>
                    <th scope="row" style="width:3%">{{$loop->iteration}}</th>
                    <td style="width:20%">{{$item->nama_organisasi}}</td>
                    <td>{{$item->nama_pengurus}} <a class="badge badge-pill badge-warning text-white">{{$item->jabatan}}</a></td>
                    <td style="width:15%">{{$item->email}}</td>
                    <td style="width:10%">{{$item->no_telp}}</td>
                    <td style="width:5%">
                        <form action="/admin/info-organisasi/{{$item->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn"><i class="material-icons">close</i> Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                @if (!count($info_organisasi))
                    <td class="d-flex justify-content-center">Data masih kosong</td>
                @endif
            </tbody>
        </table>
    </div>
    <div class="col-sm-3">
        <button class="btn btn-white w-100 mb-1" data-toggle="modal" data-target="#tambahModal">
            Tambah Info Organisasi
        </button>
        <a href="/admin/info-organisasi/cetak" target="_blank"><button class="btn btn-white w-100">Cetak Info Organisasi</button></a>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="/admin/info-organisasi" method="post">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="tambahModalLabel">Tambah Info Organisasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama_organisasi">Nama Organisasi <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('nama_organisasi') is-invalid @enderror" name="nama_organisasi" value="{{old('nama_organisasi')}}" id="nama_organisasi" placeholder="Nama Organisasi">
                        @error('nama_organisasi')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama_pengurus">Nama Pengurus <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('nama_pengurus') is-invalid @enderror" name="nama_pengurus" value="{{old('nama_pengurus')}}" id="nama_pengurus" placeholder="Nama Pengurus">
                        @error('nama_pengurus')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan" value="{{old('jabatan')}}" id="jabatan" placeholder="Jabatan">
                        @error('jabatan')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" id="email" placeholder="Email">
                        @error('email')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="no_telp">Nomor Telpon (WA) <span class="text-danger">*</span></label>
                        <input type="number" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp" value="{{old('no_telp')}}" id="no_telp" placeholder="Nomor Telpon (WA)">
                        @error('no_telp')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </div>
        </form> 
    </div>
</div>

</div>

@endsection