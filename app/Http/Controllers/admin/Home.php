<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Anggota;

class Home extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggota = Anggota::whereNotIn('jenjang', ['Alumni', 'Calon Anggota'])->get();
        $alumni = Anggota::where('jenjang', 'Alumni')->get();
        $lukis = Anggota::whereNotIn('jenjang', ['Alumni', 'Calon Anggota'])->where('bidang', 'Lukis')->get();
        $musik = Anggota::whereNotIn('jenjang', ['Alumni', 'Calon Anggota'])->where('bidang', 'Musik')->get();
        $tari = Anggota::whereNotIn('jenjang', ['Alumni', 'Calon Anggota'])->where('bidang', 'Tari')->get();
        return view('admin.home.index', [
            'anggota' => $anggota,
            'alumni' => $alumni,
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
