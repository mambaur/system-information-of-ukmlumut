<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.akun.index');
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
    public function update(Request $request, User $user)
    {
        $path = "/public/assets/admin/images/akun";
        $previousPath = "assets/admin/images/akun/";
        $imageName = $user->image;
        if($request->hasFile('upload')){
            $resource = $request->file('upload');
            $imageName   = time() .'_'.$resource->getClientOriginalName();

            // remove previous image
            if(file_exists(public_path($previousPath.$user->image)) && $user->image !== 'default.jpg'){
                unlink(public_path($previousPath.$user->image));
            }

            $resource->move(\base_path() .$path, $imageName);
        }

        User::where('id', $user->id)->update([
            'name' => $request->nama,
            'nama_belakang' => $request->nama_belakang,
            'image' => $imageName,
            'password' => ($request->password ? bcrypt($request->password) : $user->password)
        ]);

        return redirect('admin/akun')->with('status', 'Data '.$request->nama.' berhasil ubah!');
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
