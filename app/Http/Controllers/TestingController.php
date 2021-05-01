<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class TestingController extends Controller
{
    public function index(Request $request)
    {
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML('<h1>Test</h1>');
        return $pdf->stream();
    }
}
