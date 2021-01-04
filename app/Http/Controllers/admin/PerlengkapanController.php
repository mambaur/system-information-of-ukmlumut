<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Perlengkapan;
use Illuminate\Http\Request;
use App\Peminjaman;
use App\Detail_peminjaman;
use Illuminate\Support\Facades\DB;

class PerlengkapanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totalRequest = Peminjaman::where('status', 'request')->count();
        $totalTerlambat = Peminjaman::where('status', 'terlambat')->count();
        $totalDipinjam = Peminjaman::where('status', 'dipinjam')->count();
        $totalSelesai = Peminjaman::where('status', 'selesai')->count();
        $riwayat = Peminjaman::where('status', 'selesai')->orWhere('status', 'ditolak')->count();
        $perlengkapan = Perlengkapan::orderBy('id', 'DESC')->paginate(10);
        return view('admin.perlengkapan.index', [
            'perlengkapan' => $perlengkapan,
            'tipe' => 'Semua',
            'totalRequest' => $totalRequest,
            'totalDipinjam' => $totalDipinjam,
            'totalTerlambat' => $totalTerlambat,
            'totalSelesai' => $totalSelesai,
            'riwayat' => $riwayat
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.perlengkapan.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // QR Code
        $qrcode = time().'_qrcode.png';
        $text = [
            'Nama barang : '.$request->nama_barang,
            'Kondisi : '. $request->kondisi,
            'Tipe : ' .$request->tipe,
            'Tahun : ' . $request->tahun,
            'Jumlah : '. $request->jumlah,
            'Sumber : '. $request->sumber,
        ];
        $file = public_path('assets/admin/images/perlengkapan/qrcode/'.$qrcode);
        \QRCode::text(implode("\n",$text))->setOutfile($file)->setSize(10)->setMargin(1)->png();

        $imageName = 'default.jpg';
        if($request->hasFile('upload')){
            $resource = $request->file('upload');
            $imageName   = time() .'_'.$resource->getClientOriginalName();
            $path = "/public/assets/admin/images/perlengkapan";
            $resource->move(\base_path() .$path, $imageName);
        }

        Perlengkapan::create([
            'nama_barang' => $request->nama_barang,
            'kondisi' => $request->kondisi,
            'tipe' => $request->tipe,
            'tahun' => $request->tahun,
            'jumlah' => $request->jumlah,
            'sumber' => $request->sumber,
            'isDipinjam' => 0,
            'statusPinjam' => $request->statusPinjam,
            'qrcode' => $qrcode,
            'gambar' => $imageName,
        ]);

        // Perlengkapan::create($request->all());

        return redirect('/admin/perlengkapan/tambah')->with('status', 'Data perlengkapan '.$request->nama_barang.' berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Perlengkapan  $perlengkapan
     * @return \Illuminate\Http\Response
     */
    public function show(Perlengkapan $perlengkapan)
    {
        return view('admin.perlengkapan.detail', compact('perlengkapan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Perlengkapan  $perlengkapan
     * @return \Illuminate\Http\Response
     */
    public function edit(Perlengkapan $perlengkapan)
    {
        return view('admin.perlengkapan.edit', compact('perlengkapan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Perlengkapan  $perlengkapan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perlengkapan $perlengkapan)
    {
        $path = "/public/assets/admin/images/perlengkapan";
        $previousPath = "assets/admin/images/perlengkapan/";
        $imageName = $perlengkapan->gambar;
        if($request->hasFile('upload')){
            $resource = $request->file('upload');
            $imageName   = time() .'_'.$resource->getClientOriginalName();

            // remove previous image
            if(file_exists(public_path($previousPath.$perlengkapan->gambar)) && $perlengkapan->gambar !== 'default.jpg'){
                unlink(public_path($previousPath.$perlengkapan->gambar));
            }

            $resource->move(\base_path() .$path, $imageName);
        }

        unlink(public_path($previousPath.'qrcode/'.$perlengkapan->qrcode));
        $qrcode = $perlengkapan->qrcode;
        $text = [
            'Nama barang : '.$request->nama_barang,
            'Kondisi : '. $request->kondisi,
            'Tipe : ' .$request->tipe,
            'Tahun : ' . $request->tahun,
            'Jumlah : '. $request->jumlah,
            'Sumber : '. $request->sumber,
        ];
        $file = public_path('assets/admin/images/perlengkapan/qrcode/'.$qrcode);
        \QRCode::text(implode("\n",$text))->setOutfile($file)->setSize(10)->setMargin(1)->png();

        Perlengkapan::where('id', $perlengkapan->id)->update([
            'nama_barang' => $request->nama_barang,
            'kondisi' => $request->kondisi,
            'tipe' => $request->tipe,
            'tahun' => $request->tahun,
            'jumlah' => $request->jumlah,
            'sumber' => $request->sumber,
            'isDipinjam' => $request->isDipinjam,
            'statusPinjam' => $request->statusPinjam,
            'qrcode' => $qrcode,
            'gambar' => $imageName
        ]);

        return redirect('admin/perlengkapan/edit/'.$perlengkapan->id)->with('status', 'Data perlengkapan '.$request->nama_barang.' berhasil ubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Perlengkapan  $perlengkapan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perlengkapan $perlengkapan)
    {
        // remove previous image
        $path = "assets/admin/images/perlengkapan/";
        if(file_exists(public_path($path.$perlengkapan->gambar)) && $perlengkapan->gambar !== 'default.jpg'){
            unlink(public_path($path.$perlengkapan->gambar));
        }
        unlink(public_path($path.'qrcode/'.$perlengkapan->qrcode));

        Perlengkapan::destroy($perlengkapan->id);
        return redirect('/admin/perlengkapan')->with('status', 'Data perlengkapan '.$perlengkapan->nama_barang.' berhasil dihapus!');
    }

    /**
     * Showing data by category.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function category(Request $request)
    {
        $totalRequest = Peminjaman::where('status', 'request')->count();
        $totalTerlambat = Peminjaman::where('status', 'terlambat')->count();
        $totalDipinjam = Peminjaman::where('status', 'dipinjam')->count();
        $totalSelesai = Peminjaman::where('status', 'selesai')->count();
        $riwayat = Peminjaman::where('status', 'selesai')->orWhere('status', 'ditolak')->count();
        $perlengkapan = Perlengkapan::where('tipe', $request->tipe)->paginate(10);
        return view('admin.perlengkapan.index', [
            'perlengkapan' => $perlengkapan, 
            'tipe' => $request->tipe,
            'totalRequest' => $totalRequest,
            'totalDipinjam' => $totalDipinjam,
            'totalTerlambat' => $totalTerlambat,
            'totalSelesai' => $totalSelesai,
            'riwayat' => $riwayat
        ]);
    }

    /**
     * Print document perlengkapan
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function cetak(Request $request)
    {
        if($request->tipe === 'Semua'){
            $perlengkapan = Perlengkapan::all();
        }else{
            $perlengkapan = Perlengkapan::where('tipe', $request->tipe)->get();
        }
        return view('admin.perlengkapan.cetak', [
            'perlengkapan' => $perlengkapan,
            'tipe' => $request->tipe
        ]);
    }

    public function peminjaman(Request $request)
    {
        if($request->tipe === "semua"){
            $detail_peminjaman = DB::table('detail_peminjamans')
                                ->join('perlengkapans', 'perlengkapans.id', '=', 'detail_peminjamans.perlengkapans_id')->get();
            $peminjaman = Peminjaman::where('status', 'selesai')->orWhere('status', 'ditolak')->orderBy('id', 'DESC')->paginate(20);
            return view('admin.perlengkapan.peminjaman', [
                'peminjaman' => $peminjaman,
                'detail_peminjaman' => $detail_peminjaman
            ]);
        }else{
            $detail_peminjaman = DB::table('detail_peminjamans')
                                ->join('perlengkapans', 'perlengkapans.id', '=', 'detail_peminjamans.perlengkapans_id')->get();
            $peminjaman = Peminjaman::where('status', $request->tipe)->orderBy('id', 'DESC')->paginate(20);
            return view('admin.perlengkapan.peminjaman', [
                'peminjaman' => $peminjaman,
                'detail_peminjaman' => $detail_peminjaman
            ]);
        }
    }

    public function konfirmasiPeminjaman(Request $request, Peminjaman $peminjaman)
    {
        $message = '';
        $detail_peminjaman = Detail_peminjaman::where('peminjamans_kode_pinjam', $request->kode_pinjam)->get();
        if($request->submit === "konfirmasi"){
            Peminjaman::where('id', $peminjaman->id)->update([
                'status' => 'dipinjam'
            ]);
            
            foreach ($detail_peminjaman as $key => $item) {
                Perlengkapan::where('id', $item->perlengkapans_id)->update([
                    'isDipinjam' => 1
                ]);
            }
            $message = 'Permintaan peminjaman barang berhasil dikonfirmasi.';
            return redirect('admin/perlengkapan/peminjaman?tipe=request')->with('status', $message);

        }else if($request->submit === "tolak"){
            Peminjaman::where('id', $peminjaman->id)->update([
                'status' => 'ditolak'
            ]);
            $message = 'Peminjaman barang telah ditolak.';
            return redirect('admin/perlengkapan/peminjaman?tipe=request')->with('status', $message);

        }else if($request->submit === "pengembalian"){
            Peminjaman::where('id', $peminjaman->id)->update([
                'status' => 'selesai'
            ]);
            foreach ($detail_peminjaman as $key => $item) {
                Perlengkapan::where('id', $item->perlengkapans_id)->update([
                    'isDipinjam' => 0
                ]);
            }
            $message = 'Peminjaman barang berhasil dikembalikan.';
            return redirect('admin/perlengkapan/peminjaman?tipe=dipinjam')->with('status', $message);
        }else if($request->submit === "hapus"){
            Peminjaman::destroy($peminjaman->id);
            $message = 'Peminjaman berhasil dihapus';
            return redirect('admin/perlengkapan/peminjaman?tipe=semua')->with('status', $message);
        }
    }
}
