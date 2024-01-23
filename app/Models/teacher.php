<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{

    use HasFactory;

    protected $table ='teacher';


    public function class()
    {

        return $this->hasMany(kelas::class, 'nama','id');
        // return $this->belongsTo(kelas::class, 'ketika lu berbeda nama class_id contoh kelas_id itu akan diubah sesuai dengan yang ada di table referensi', 'nama field yang yang menjadi rujukan tabel field namenya (biasanya id)');
    }
    public function student()
    {
        return $this->hasMany(student::class, 'class_id', 'id');
    }
}
