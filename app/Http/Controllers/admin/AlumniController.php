<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Anggota;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumni = Anggota::where('jenjang', 'alumni')->paginate(10);
        return view('admin.alumni.index', compact('alumni'));
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

    /**
     * Print data from Anggota table
     *
     * @param  \App\Anggota  $anggota
     */
    public function cetak()
    {
        $anggota = Anggota::where('jenjang', 'Alumni')->orderBy('nama_anggota', 'ASC')->get();
        return view('admin.alumni.cetak', compact('anggota'));
    }

    public function category(Request $request)
    {
        $alumni = null;
        if ($request->year) {
            $alumni = Anggota::where('angkatan', $request->year)->where('jenjang', 'Alumni')->paginate(10);
        }else{
            $alumni = Anggota::where('bidang', $request->bidang)->where('jenjang', 'Alumni')->paginate(10);
        }
        return view('admin.alumni.index', compact('alumni'));
    }
}
