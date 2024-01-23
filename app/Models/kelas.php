<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;

    protected $table = 'class';
    public function student()
    {
        return $this->hasMany(student::class, 'class_id', 'id');
    }

    
    public function guru()
    {
        return $this->belongsTo(teacher::class, 'teacher', 'id');
    }
}
