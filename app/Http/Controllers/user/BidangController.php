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
        $artikel = Artikel::where('bidang', 'Lukis')->where('status', 1)->orderBy('id', 'DESC')->paginate(10);
        return view('user.lukis.index',[
            'artikel' => $artikel
        ]);
    }

    public function lukisDetail(Artikel $artikel)
    {
        return view('user.lukis.detail', compact('artikel'));
    }
}
