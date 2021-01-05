<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Perlengkapan;
use App\Peminjaman;
use App\Detail_peminjaman;
use App\Pengaturan;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perlengkapan = Perlengkapan::where('statusPinjam', 1)->where('isDipinjam', 0)->get();
        $peminjaman_setting = Pengaturan::where('name', 'peminjaman')->first();
        return view('user.peminjaman.index', [
            'perlengkapan' => $perlengkapan,
            'peminjaman_setting' => $peminjaman_setting->value
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
        $kode_pinjam = time().date('dmY');

        $request->validate([
            'nama_peminjam' => 'required',
            'email' => 'required|email',
            'instansi' => 'required',
            'acara' => 'required',
            'tanggal_pinjam' => 'required',
            'tanggal_kembali' => 'required'
        ]);

        if ($request->barang) {
            foreach ($request->barang as $key => $item) {
               // Insert data to detail_peminjaman
                Detail_peminjaman::create([
                    'peminjamans_kode_pinjam' => $kode_pinjam,
                    'perlengkapans_id' => $item
                ]);
            }
        }else{
            return redirect('/peminjaman-alat')->with('error', 'Isikan data dengan benar dan lengkap');
            die;
        }

        // Insert data to Peminjaman
        Peminjaman::create([
            'nama_peminjam' => $request->nama_peminjam,
            'email' => $request->email,
            'instansi' => $request->instansi,
            'acara' => $request->acara,
            'keterangan' => $request->keterangan,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_kembali' => $request->tanggal_kembali,
            'status' => 'request',
            'kode_pinjam' => $kode_pinjam
        ]);

        return redirect('/success')->with('status', 'Permintaan peminjaman berhasil dikirim. Mohon tunggu tim perlengkapan mengkonfirmasi permintaan anda.')->with('id', $kode_pinjam)->with('cetak', 'Cetak bukti peminjaman');
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
