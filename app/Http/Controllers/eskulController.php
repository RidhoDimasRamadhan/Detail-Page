<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\eskul;

class eskulController extends Controller
{
    public function eskul(){
        $data_eskul = eskul::with('student')->get();
        return view('eskul', ['data_eskul'=>$data_eskul]);
    }
}
