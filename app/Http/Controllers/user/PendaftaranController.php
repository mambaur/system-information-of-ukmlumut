<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Anggota;
use App\Pengaturan;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendaftaran_setting = Pengaturan::where('name', 'pendaftaran')->first();
        return view('user.pendaftaran.index', [
            'pendaftaran_setting' => $pendaftaran_setting->value
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
        $request->validate([
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
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'semester' => 'required',
        ]);

        $imageName = 'default.jpg';
        if($request->hasFile('upload')){
            $resource = $request->file('upload');
            $imageName   = time() .'_'.$resource->getClientOriginalName();
            $path = "/public/assets/admin/images/anggota";
            $resource->move(\base_path() .$path, $imageName);
        }

        $lastJenjang = Anggota::whereNotIn('jenjang', ['Calon Anggota', 'Alumni'])->max('angkatan');
        $noUrut = Anggota::where('jenjang', 'Calon Anggota')->count()+1;

        Anggota::create([
            'nal' => $noUrut.'/'.($request->bidang === "Lukis"?"L":($request->bidang === "Musik" ? "M" : "T")).'/LMT'.'/'.$this->toRoman(($lastJenjang ? $lastJenjang : 1996) - 1996).'/'.date('Y'),
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
            'jenjang' => 'Calon Anggota',
            'angkatan' => date('Y'),
            'foto' => $imageName,
            'tempat_lahir' => $request->tempat_lahir, 
            'tanggal_lahir' => $request->tanggal_lahir, 
            'semester' => $request->semester, 
            'sertifikat' => $request->sertifikat
        ]);

        return redirect('/success')->with('status', 'Pendaftaran berhasil, tunggu informasi selanjutnya dari UKM LUMUT. Pastikan nomor yang kamu masukkan sudah benar, SALAM BUDAYA!')->with('id', $request->email)->with('cetak', 'Cetak bukti pendaftaran');
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

    /**
     * @param int $number
     * @return string
     */
    public function toRoman($number=1) {
        if (!$number) {
            $number = 1;
        }
        $map = array('M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1);
        $returnValue = '';
        while ($number > 0) {
            foreach ($map as $roman => $int) {
                if($number >= $int) {
                    $number -= $int;
                    $returnValue .= $roman;
                    break;
                }
            }
        }
        return $returnValue;
    }
}
