<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class student extends Model
{
    use HasFactory;
    protected $table = 'student';


    public function class()
    {

        return $this->belongsTo(kelas::class);
        // return $this->belongsTo(kelas::class, 'ketika lu berbeda nama class_id contoh kelas_id itu akan diubah sesuai dengan yang ada di table referensi', 'nama field yang yang menjadi rujukan tabel field namenya (biasanya id)');
    }

    public function student_eskul()
    {
        return $this->belongsToMany(eskul::class, 'student_eskul', 'student_id', 'eskul_id');
    }
}
