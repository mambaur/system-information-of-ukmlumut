<?php

namespace App\Http\Controllers\admin;

use App\Anggota;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggota = Anggota::paginate(10);
        $anggotaBaru = Anggota::where('jenjang', 'Anggota Baru')->get();
        $anggotaMuda = Anggota::where('jenjang', 'Anggota Muda')->get();
        $anggotaBiasa = Anggota::where('jenjang', 'Anggota Biasa')->get();
        $anggotaLuarBiasa = Anggota::where('jenjang', 'Anggota Luar Biasa')->get();
        $alumni = Anggota::where('jenjang', 'Alumni')->get();
        $calonAnggota = Anggota::where('jenjang', 'Calon Anggota')->get();
        return view('admin.anggota.index', [
            'anggota' => $anggota,
            'anggotaBaru' => $anggotaBaru,
            'anggotaMuda' => $anggotaMuda,
            'anggotaBiasa' => $anggotaBiasa,
            'anggotaLuarBiasa' => $anggotaLuarBiasa,
            'alumni' => $alumni,
            'calonAnggota' => $calonAnggota
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.anggota.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imageName = 'default.jpg';
        if($request->hasFile('upload')){
            $resource = $request->file('upload');
            $imageName   = time() .'_'.$resource->getClientOriginalName();
            $path = "/public/assets/admin/images/anggota";
            $resource->move(\base_path() .$path, $imageName);
        }

        Anggota::create([
            'nal' => $request->nal,
            'nim' => $request->nim,
            'nama_anggota' => $request->nama_anggota,
            'jurusan' => $request->jurusan,
            'alamat' => $request->alamat,
            'bidang' => $request->bidang,
            'telp' => $request->telp,
            'jenjang' => $request->jenjang,
            'angkatan' => $request->angkatan,
            'foto' => $imageName,
        ]);

        return redirect('/admin/anggota/tambah')->with('status', 'Data anggota '.$request->nama_anggota.' berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function show(Anggota $anggota)
    {
        return view('admin.anggota.detail', compact('anggota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function edit(Anggota $anggota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anggota $anggota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anggota $anggota)
    {
        //
    }
}
