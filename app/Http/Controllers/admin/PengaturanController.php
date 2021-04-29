<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Anggota;
use App\Pengaturan;

class PengaturanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendaftaran = Pengaturan::where('name', 'pendaftaran')->first();
        $peminjaman = Pengaturan::where('name', 'peminjaman')->first();
        $pesan = Pengaturan::where('name', 'pesan')->first();
        return view('admin.pengaturan.index', [
            'pendaftaran' => $pendaftaran,
            'peminjaman' => $peminjaman,
            'pesan' => $pesan
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

    public function updatePeminjaman(Request $request, Pengaturan $pengaturan)
    {
        Pengaturan::where('id', $pengaturan->id)->update([
            'value' => !$pengaturan->value
        ]);

        return redirect('admin/pengaturan')->with('status', 'Pengaturan '.$pengaturan->name.' berhasil diubah.');
    }
    
    public function updatePendaftaran(Request $request, Pengaturan $pengaturan)
    {
        Pengaturan::where('id', $pengaturan->id)->update([
            'value' => !$pengaturan->value
        ]);

        return redirect('admin/pengaturan')->with('status', 'Pengaturan '.$pengaturan->name.' berhasil diubah.');
    }
    
    public function updatePesan(Request $request, Pengaturan $pengaturan)
    {
        Pengaturan::where('id', $pengaturan->id)->update([
            'value' => !$pengaturan->value
        ]);

        return redirect('admin/pengaturan')->with('status', 'Pengaturan '.$pengaturan->name.' berhasil diubah.');
    }
}
