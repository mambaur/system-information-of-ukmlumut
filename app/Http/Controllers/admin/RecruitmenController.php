<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Anggota;

class RecruitmenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggota = Anggota::where('jenjang', 'Calon Anggota')->orderBy('nama_anggota', 'ASC')->paginate(25);
        $all = Anggota::where('jenjang', 'Calon Anggota')->get();
        $asal = null;
        $vals = null;
        $keyAsal = null;
        foreach ($all as $value) {
            $asal[] = $value->kota;
        }
        
        // Get count dupllicate kota
        if ($asal) {
            $vals = array_count_values($asal);
            $keyAsal = collect($vals)->keys();
        }

        // Data Anggota
        $lukis = Anggota::where('jenjang', 'Calon Anggota')->where('bidang', 'Lukis')->get()->count();
        $musik = Anggota::where('jenjang', 'Calon Anggota')->where('bidang', 'Musik')->get()->count();
        $tari = Anggota::where('jenjang', 'Calon Anggota')->where('bidang', 'Tari')->get()->count();

        return view('admin.recruitmen.index', [
            'anggota' => $anggota,
            'asal' => $vals,
            'keyAsal' => $keyAsal,
            'lukis' => $lukis,
            'musik' => $musik,
            'tari' => $tari,
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
    public function update(Request $request, Anggota $anggota)
    {
        Anggota::where('id', $anggota->id)->update([
            'jenjang' => 'Anggota Baru'
        ]);

        return redirect('admin/recruitmen/')->with('status', $anggota->nama_anggota.' berhasil diterima sebagai Anggota Baru!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anggota $anggota)
    {
        // remove previous image
        $path = "assets/admin/images/anggota/";
        if(file_exists(public_path($path.$anggota->foto)) && $anggota->foto !== 'default.jpg'){
            unlink(public_path($path.$anggota->foto));
        }

        Anggota::destroy($anggota->id);
        return redirect('/admin/recruitmen')->with('status', 'Data anggota '.$anggota->nama_anggota.' berhasil dihapus!');
    }

    /**
     * Print data from Anggota table
     *
     * @param  \App\Anggota  $anggota
     */
    public function cetak_presensi()
    {
        $anggota = Anggota::where('jenjang', 'Calon Anggota')->orderBy('bidang', 'ASC')->get();
        return view('admin.recruitmen.cetak-presensi', compact('anggota'));
    }

    /**
     * Print data from Anggota table
     *
     * @param  \App\Anggota  $anggota
     */
    public function cetak_semua()
    {
        $anggota = Anggota::where('jenjang', 'Calon Anggota')->orderBy('bidang', 'ASC')->get();
        return view('admin.recruitmen.cetak-semua', compact('anggota'));
    }

    /**
     * Print data from Anggota table
     *
     * @param  \App\Anggota  $anggota
     */
    public function cetak_lukis()
    {
        $anggota = Anggota::where('jenjang', 'Calon Anggota')->where('bidang', 'Lukis')->orderBy('bidang', 'ASC')->get();
        return view('admin.recruitmen.cetak-lukis', compact('anggota'));
    }

    /**
     * Print data from Anggota table
     *
     * @param  \App\Anggota  $anggota
     */
    public function cetak_bidang(Request $request)
    {
        $anggota = Anggota::where('jenjang', 'Calon Anggota')->where('bidang', $request->nama)->orderBy('bidang', 'ASC')->get();
        return view('admin.recruitmen.cetak-bidang', [
            'anggota' => $anggota,
            'bidang' => strtoupper($request->nama)
        ]);
    }
}
