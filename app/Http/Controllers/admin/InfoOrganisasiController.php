<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Info_organisasi;
use Illuminate\Http\Request;

class InfoOrganisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info_organisasi = Info_organisasi::orderBy('nama_organisasi', 'ASC')->paginate(15);
        return view('admin.info-organisasi.index', compact('info_organisasi'));
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
        $request->validate([
            'nama_organisasi' => 'required',
            'nama_pengurus' => 'required',
            'no_telp' => 'required|numeric',
        ]);

        Info_organisasi::create([
            'nama_organisasi' => $request->nama_organisasi,
            'nama_pengurus' => $request->nama_pengurus,
            'jabatan' => $request->jabatan,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
        ]);

        return redirect('admin/info-organisasi')->with('status', 'Info organisasi berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Info_organisasi  $info_organisasi
     * @return \Illuminate\Http\Response
     */
    public function show(Info_organisasi $info_organisasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Info_organisasi  $info_organisasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Info_organisasi $info_organisasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Info_organisasi  $info_organisasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Info_organisasi $info_organisasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Info_organisasi  $info_organisasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Info_organisasi $info_organisasi)
    {
        Info_organisasi::destroy($info_organisasi->id);
        return redirect('admin/info-organisasi')->with('status', 'Informasi '.$info_organisasi->nama_pengurus.' berhasil dihapus.');
    }

    public function cetak()
    {
        $info_organisasi = Info_organisasi::orderBy('nama_organisasi', 'ASC')->get();
        return view('admin.info-organisasi.cetak', compact('info_organisasi'));
    }
}
