<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Log_login;
use Illuminate\Http\Request;

class logLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Log_login::where('email', '<>', 'bauroziq@gmail.com')->orderBy('id', 'DESC')->paginate(20);
        return view('admin.log.index', compact('user'));
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
     * @param  \App\Log_login  $log_login
     * @return \Illuminate\Http\Response
     */
    public function show(Log_login $log_login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Log_login  $log_login
     * @return \Illuminate\Http\Response
     */
    public function edit(Log_login $log_login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Log_login  $log_login
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Log_login $log_login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Log_login  $log_login
     * @return \Illuminate\Http\Response
     */
    public function destroy(Log_login $log_login)
    {
        //
    }
}
