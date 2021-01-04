<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Anggota;
use App\Artikel;
use App\Pesan;
use App\Peminjaman;

class Home extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Data anggota
        $anggota = Anggota::whereNotIn('jenjang', ['Alumni', 'Calon Anggota'])->get();
        $calon_anggota = Anggota::where('jenjang', 'Calon Anggota')->get();
        $alumni = Anggota::where('jenjang', 'Alumni')->get();
        $lukis = Anggota::whereNotIn('jenjang', ['Alumni', 'Calon Anggota'])->where('bidang', 'Lukis')->get();
        $musik = Anggota::whereNotIn('jenjang', ['Alumni', 'Calon Anggota'])->where('bidang', 'Musik')->get();
        $tari = Anggota::whereNotIn('jenjang', ['Alumni', 'Calon Anggota'])->where('bidang', 'Tari')->get();

        // Data artikel
        $artikel = Artikel::where('status', 1)->orderBy('id', 'DESC')->paginate(3);

        // Data message
        $pesan = Pesan::orderBy('id', 'DESC')->paginate(3);

        // Data peminjaman
        $peminjaman = Peminjaman::where('status', 'request')->count();

        return view('admin.home.index', [
            'anggota' => $anggota,
            'ca' => $calon_anggota,
            'alumni' => $alumni,
            'lukis' => $lukis,
            'musik' => $musik,
            'tari' => $tari,
            'artikel' => $artikel,
            'pesan' => $pesan,
            'peminjaman' => $peminjaman
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
        //
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
