<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Perlengkapan;
use Illuminate\Http\Request;

class PerlengkapanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perlengkapan = Perlengkapan::paginate(10);
        // return view('admin.perlengkapan.index', ['perlengkapan' => $perlengkapan]);
        return view('admin.perlengkapan.index', [
            'perlengkapan' => $perlengkapan,
            'tipe' => 'Semua'
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
        // $perlengkapan = new Perlengkapan;
        // $perlengkapan->nama_barang = $request->nama_barang;
        // $perlengkapan->kondisi = $request->kondisi;
        // $perlengkapan->tipe = $request->tipe;
        // $perlengkapan->tahun = $request->tahun;
        // $perlengkapan->jumlah = $request->jumlah;
        // $perlengkapan->sumber = $request->sumber;
        // $perlengkapan->isDipinjam = 0;

        // $perlengkapan->save();

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

        $imageName = 'default.jpg';
        if($request->hasFile('upload')){
            $resource = $request->file('upload');
            $imageName   = time() .'_'.$resource->getClientOriginalName();
            $path = "/public/assets/admin/images/perlengkapan";
            $resource->move(\base_path() .$path, $imageName);
        }

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
        $perlengkapan = Perlengkapan::where('tipe', $request->tipe)->paginate(10);
        return view('admin.perlengkapan.index', [
            'perlengkapan' => $perlengkapan, 
            'tipe' => $request->tipe
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
}
