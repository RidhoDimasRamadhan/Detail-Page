<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\teacher;
use Carbon\Carbon;
class teacherSeeder extends Seeder
{


    
    public function run(): void
    {
        $data = [
              [ 'nama_guru'=>'Ridho dimas ramadhan'], 
              [ 'nama_guru'=>'Gianis'], 
              [ 'nama_guru'=>'Lebron James'], 
        ];


        foreach($data as $data_teacher )(
            teacher::insert([
                'nama_guru' => $data_teacher['nama_guru'],
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ])
        );
    }
}
