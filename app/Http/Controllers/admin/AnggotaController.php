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
        $anggota = Anggota::whereNotIn('jenjang', ['Alumni', 'Calon Anggota'])->orderBy('nama_anggota', 'ASC')->paginate(10);
        $anggotaBaru = Anggota::where('jenjang', 'Anggota Baru')->get();
        $anggotaMuda = Anggota::where('jenjang', 'Anggota Muda')->get();
        $anggotaBiasa = Anggota::where('jenjang', 'Anggota Biasa')->get();
        $anggotaLuarBiasa = Anggota::where('jenjang', 'Anggota Luar Biasa')->get();
        $alumni = Anggota::where('jenjang', 'Alumni')->get();
        $calonAnggota = Anggota::where('jenjang', 'Calon Anggota')->get();

        // Bidang
        $lukis = Anggota::where('bidang', 'Lukis')->whereNotIn('jenjang', ['Alumni', 'Calon Anggota'])->get();
        $musik = Anggota::where('bidang', 'Musik')->whereNotIn('jenjang', ['Alumni', 'Calon Anggota'])->get();
        $tari = Anggota::where('bidang', 'Tari')->whereNotIn('jenjang', ['Alumni', 'Calon Anggota'])->get();

        return view('admin.anggota.index', [
            'anggota' => $anggota,
            'anggotaBaru' => $anggotaBaru,
            'anggotaMuda' => $anggotaMuda,
            'anggotaBiasa' => $anggotaBiasa,
            'anggotaLuarBiasa' => $anggotaLuarBiasa,
            'alumni' => $alumni,
            'calonAnggota' => $calonAnggota,
            'lukis' => $lukis,
            'musik' => $musik,
            'tari' => $tari
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
        $request->validate([
            'nal' => 'required',
            'nim' => 'required|unique:anggotas',
            'email' => 'required|email:rfc,dns|unique:anggotas',
            'nama_anggota' => 'required',
            'jurusan' => 'required',
            'prodi' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'bidang' => 'required',
            'kategori_bidang' => 'required',
            'telp' => 'required|numeric',
            'jenjang' => 'required',
            'angkatan' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'semester' => 'required'
        ]);

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
            'email' => $request->email,
            'nama_anggota' => $request->nama_anggota,
            'jurusan' => $request->jurusan,
            'prodi' => $request->prodi,
            'alamat' => $request->alamat,
            'kota' => strtoupper($request->kota),
            'bidang' => $request->bidang,
            'kategori_bidang' => $request->kategori_bidang,
            'telp' => $request->telp,
            'jenjang' => $request->jenjang,
            'angkatan' => $request->angkatan,
            'foto' => $imageName,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'semester' => $request->semester,
            'sertifikat' => $request->sertifikat
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
        return view('admin.anggota.edit', compact('anggota'));
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
        $request->validate([
            'nal' => 'required',
            'nim' => 'required|unique:anggotas,nim,'.$anggota->id,
            'email' => 'required|email:rfc,dns|unique:anggotas,email,'.$anggota->id,
            'nama_anggota' => 'required',
            'jurusan' => 'required',
            'prodi' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'bidang' => 'required',
            'kategori_bidang' => 'required',
            'telp' => 'required|numeric',
            'jenjang' => 'required',
            'angkatan' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'semester' => 'required',
        ]);

        $path = "/public/assets/admin/images/anggota";
        $previousPath = "assets/admin/images/anggota/";
        $imageName = $anggota->foto;
        if($request->hasFile('upload')){
            $resource = $request->file('upload');
            $imageName   = time() .'_'.$resource->getClientOriginalName();

            // remove previous image
            if(file_exists(public_path($previousPath.$anggota->foto)) && $anggota->foto !== 'default.jpg'){
                unlink(public_path($previousPath.$anggota->foto));
            }

            $resource->move(\base_path() .$path, $imageName);
        }

        Anggota::where('id', $anggota->id)->update([
            'nal' => $request->nal,
            'nim' => $request->nim,
            'email' => $request->email,
            'nama_anggota' => $request->nama_anggota,
            'jurusan' => $request->jurusan,
            'prodi' => $request->prodi,
            'alamat' => $request->alamat,
            'kota' => strtoupper($request->kota),
            'bidang' => $request->bidang,
            'kategori_bidang' => $request->kategori_bidang,
            'telp' => $request->telp,
            'jenjang' => $request->jenjang,
            'angkatan' => $request->angkatan,
            'foto' => $imageName,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'semester' => $request->semester,
            'sertifikat' => $request->sertifikat
        ]);

        return redirect('admin/anggota/edit/'.$anggota->id)->with('status', 'Data anggota '.$request->nama_anggota.' berhasil ubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Anggota  $anggota
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
        return redirect('/admin/anggota')->with('status', 'Data anggota '.$anggota->nama_anggota.' berhasil dihapus!');
    }

    /**
     * Print data from Anggota table
     *
     * @param  \App\Anggota  $anggota
     */
    public function cetak()
    {
        $anggota = Anggota::whereNotIn('jenjang', ['Alumni', 'Calon Anggota'])->orderBy('nama_anggota', 'ASC')->get();
        return view('admin.anggota.cetak-presensi', compact('anggota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
     public function cetakData(Request $request)
     {
         $data = $request->tipe;
        if($data === 'lukis'){
            $data = 'Lukis';
        }elseif ($data === 'musik'){
            $data = 'Musik';
        }elseif ($data === 'tari'){
            $data = 'Tari';
        }elseif ($data === 'anggota_baru'){
            $data = 'Anggota Baru';
        }elseif ($data === 'anggota_muda'){
            $data = 'Anggota Muda';    
        }elseif ($data === 'anggota_biasa'){
            $data = 'Anggota Biasa';
        }elseif ($data === 'anggota_luar_biasa'){
            $data = 'Anggota Luar Biasa';
        }

        if ($request->jenis === 'presensi') {
            $anggota = Anggota::whereNotIn('jenjang', ['Alumni', 'Calon Anggota'])->where('bidang', $data)->orderBy('nama_anggota', 'ASC')->get();
            return view('admin.anggota.cetak-data', [
                'anggota' => $anggota,
                'title' => $data
            ]);
        }elseif($request->jenis === 'bidang'){
            $anggota = Anggota::whereNotIn('jenjang', ['Alumni', 'Calon Anggota'])->where('bidang', $data)->orderBy('nama_anggota', 'ASC')->get();
            return view('admin.anggota.cetak-anggota', [
                'anggota' => $anggota,
                'title' => $data
            ]);
        }elseif($request->jenis === 'jenjang'){
            $anggota = Anggota::whereNotIn('jenjang', ['Alumni', 'Calon Anggota'])->where('jenjang', $data)->orderBy('nama_anggota', 'ASC')->get();
            return view('admin.anggota.cetak-anggota', [
                'anggota' => $anggota,
                'title' => $data
            ]);
        }else {
            return redirect('/admin/anggota');
        }
     }
}
