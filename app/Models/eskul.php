<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eskul extends Model
{
    use HasFactory;
    protected $table = 'eskul';

public function student()
{
    return $this->belongsToMany(student::class, 'student_eskul', 'student_id', 'eskul_id');
}

}
