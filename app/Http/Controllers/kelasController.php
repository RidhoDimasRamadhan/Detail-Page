<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelas;

class kelasController extends Controller
{
    

    public function kelas(){
        
        $kelas = kelas::with(['student','guru'])->get();
        return view('kelas', ['kelas_data'=>$kelas]);
         
    }

    public function detail($id){
        // dd($id);
    $data = kelas::with(['student','guru'])->findOrFail($id);
return view('detail.kelas-detail',['detailKelas'=>$data]);

    }

    
}
