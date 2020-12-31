<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Perlengkapan;
use App\Peminjaman;
use App\Detail_peminjaman;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perlengkapan = Perlengkapan::where('statusPinjam', 1)->where('isDipinjam', 0)->get();
        return view('user.peminjaman.index', [
            'perlengkapan' => $perlengkapan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Insert data to Peminjaman
        Peminjaman::create([
            'nama_peminjam' => $request->nama_peminjam,
            'email' => $request->email,
            'instansi' => $request->instansi,
            'acara' => $request->acara,
            'keterangan' => $request->keterangan,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_kembali' => $request->tanggal_kembali,
            'status' => 'request'
        ]);

        // Insert data to detail_peminjaman
        Detail_peminjaman::create([
            'peminjamans_id' => 1,
            'perlengkapans_id' => 2
        ]);

        return redirect('peminjaman-alat')->with('status', 'Peminjaman berhasil dikirimkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
