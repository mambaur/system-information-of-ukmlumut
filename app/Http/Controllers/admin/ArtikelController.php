<?php

namespace App\Http\Controllers\admin;

use App\Artikel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::paginate(8);
        return view('admin.artikel.index', compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.artikel.tambah');
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
            $path = "/public/assets/admin/images/artikel";
            $resource->move(\base_path() .$path, $imageName);
        }

        Artikel::create([
            'judul' => $request->judul,
            'image' => $imageName,
            'konten' => $request->konten,
            'bidang' => $request->bidang,
            'status' => (isset($request->draft)? 0 : 1)
        ]);

        return redirect('/admin/artikel/tambah')->with('status', 'Artikel '.$request->judul.' berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show(Artikel $artikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit(Artikel $artikel)
    {
        return view('admin.artikel.edit', compact('artikel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artikel $artikel)
    {
        $path = "/public/assets/admin/images/artikel";
        $previousPath = "assets/admin/images/artikel/";
        $imageName = $artikel->image;
        if($request->hasFile('upload')){
            $resource = $request->file('upload');
            $imageName   = time() .'_'.$resource->getClientOriginalName();

            // remove previous image
            if(file_exists(public_path($previousPath.$artikel->image)) && $artikel->image !== 'default.jpg'){
                unlink(public_path($previousPath.$artikel->image));
            }

            $resource->move(\base_path() .$path, $imageName);
        }

        Artikel::where('id', $artikel->id)->update([
            'judul' => $request->judul,
            'image' => $imageName,
            'konten' => $request->konten,
            'bidang' => $request->bidang,
            'status' => (isset($request->draft)? 0 : 1)
        ]);

        return redirect('admin/artikel/edit/'.$artikel->id)->with('status', 'Data '.$request->judul.' berhasil ubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artikel $artikel)
    {
        // remove previous image
        $path = "assets/admin/images/artikel/";
        if(file_exists(public_path($path.$artikel->image)) && $artikel->image !== 'default.jpg'){
            unlink(public_path($path.$artikel->image));
        }

        Artikel::destroy($artikel->id);
        return redirect('/admin/artikel')->with('status', 'Data '.$artikel->judul.' berhasil dihapus!');
    }
}
