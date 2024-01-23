<?php

namespace App\Http\Controllers;

use App\Models\teacher;

use Illuminate\Http\Request;


class teacherControlelr extends Controller
{
     public function guru(){
        $data = teacher::with('student')->get();
        return view('teacher', ['guru'=>$data]);
    }
    
    public function detail($id){
        $data = teacher::with(['class.student','student'])->findOrFail($id);
        return view('detail.teacher-detail',['teacherDetail'=>$data]);
     }

}
