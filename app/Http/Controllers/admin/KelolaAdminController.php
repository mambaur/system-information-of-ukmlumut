<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

// bcrypt = $2y$10$XaTX32Lh81lwActCAOvDceHTStlcsJ05FqQ9ru6P/qupZKeaH0Vbe

class KelolaAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::paginate(10);
        return view('admin.akun.master.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.akun.master.tambah');
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
            $path = "/public/assets/admin/images/akun";
            $resource->move(\base_path() .$path, $imageName);
        }

        User::create([
            'name' => $request->nama,
            'nama_belakang' => $request->nama_belakang,
            'jabatan' => $request->jabatan,
            'email' => $request->email,
            'role' => $request->role,
            'image' => $imageName,
            'password' => bcrypt($request->password)
        ]);

        return redirect('/admin/kelola-admin/tambah')->with('status', 'Data admin '.$request->nama_anggota.' berhasil ditambahkan!');
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
