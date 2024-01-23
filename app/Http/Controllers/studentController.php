<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use Illuminate\Support\Facades\DB;

class studentController extends Controller
{
    
    // $nama = student::all();

    public function index(){

        // contoh dibawah ini adalah ketika menggunakan lazy loading atau eloquent orm
        $data = student::all();


        // $data = student::with(('nama function yang ada di model student')->get());

        // dd($data)->all();


        return view('student',['data'=>$data]);

        //  jadi didalm controller ini kita juga bisa dalam menyelesaikan permasalah berupa menambah data, update data, delte data deengan menggunajan eloquent dan query builder, untuk perbedaanya ialah hanya di peringkasan pada code yang sedang ditulis ramadhan

        // query builder 
        // $student = DB::table('student')->get();
        

        
        // // eloquent ORM
        // $student= student::all();
        // $student::create([
        //     'nama',
        //     'kelas',
        //     'nis',
        //     'class_id',
        // ]);

        // $student::find('id',21)->update([
        //     'nama',
        //     'kelas' 
        // ]);

        // $student::delete();
    }

    public function detail($id){
        // dd($id);
        $data = student::with(['class.guru','student_eskul'])->findOrFail($id);


        // // $data = student::with(('nama function yang ada di model student')->get());

        // // dd($data)->all();


        return view('detail.student-detail',['studentDetail'=>$data]);
        // return view('detail.student-detail');

        // dd($id);
    }
}
