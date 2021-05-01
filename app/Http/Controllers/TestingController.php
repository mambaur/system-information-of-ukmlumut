<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class TestingController extends Controller
{
    public function index(Request $request)
    {
        $data = [];
        $pdf = PDF::loadView('test', $data);
        $options = [
            'dpi' => 96, 
            'defaultFont' => 'Nunito',
            'isRemoteEnabled' => true
        ];

        $pdf->setOptions($options);
        // $pdf->setPaper('a4', 'landscape');
        return $pdf->stream('Download');
    }
}
