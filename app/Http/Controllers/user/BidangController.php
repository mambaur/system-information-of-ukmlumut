<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Artikel;

class BidangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function lukis()
    {
        $artikel = Artikel::where('bidang', 'Lukis')->orWhere('bidang', 'Semua')->where('status', 1)->orderBy('id', 'DESC')->paginate(10);
        return view('user.lukis.index',[
            'artikel' => $artikel
        ]);
    }

    public function lukisDetail(Artikel $artikel)
    {
        return view('user.musik.detail', compact('artikel'));
    }

    public function musik()
    {
        $artikel = Artikel::where('bidang', 'Musik')->orWhere('bidang', 'Semua')->where('status', 1)->orderBy('id', 'DESC')->paginate(10);
        return view('user.musik.index',[
            'artikel' => $artikel
        ]);
    }

    public function musikDetail(Artikel $artikel)
    {
        return view('user.musik.detail', compact('artikel'));
    }
    
    public function tari()
    {
        $artikel = Artikel::where('bidang', 'Tari')->orWhere('bidang', 'Semua')->where('status', 1)->orderBy('id', 'DESC')->paginate(10);
        return view('user.tari.index',[
            'artikel' => $artikel
        ]);
    }

    public function tariDetail(Artikel $artikel)
    {
        return view('user.tari.detail', compact('artikel'));
    }
}
