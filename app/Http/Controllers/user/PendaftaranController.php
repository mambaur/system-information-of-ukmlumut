<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Anggota;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.pendaftaran.index');
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
        dd($request);

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
            'alamat' => $request->alamat,
            'kota' => $request->kota,
            'bidang' => $request->bidang,
            'telp' => $request->telp,
            'angkatan' => date("Y"),
            'foto' => $imageName,
        ]);

        return redirect('/pendaftaran-anggota')->width('status', 'Pendaftaran berhasil, tunggu informasi selanjutnya dari UKM LUMUT. Pastikan nomor yang kamu masukkan sudah benar ya :D, SALAM BUDAYA!');
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
