<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\eskul;
use Carbon\Carbon;

class eskulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     $data = [
        ['nama_eskul'=>'basket'],
        ['nama_eskul'=>'BILIARD'],
        ['nama_eskul'=>'futsal'],
        ['nama_eskul'=>'taekwondo'],
        ['nama_eskul'=>'rugby'],
        ['nama_eskul'=>'karambol'],
        ['nama_eskul'=>'silat'],
     ];

     foreach($data as $data_eskul){
        eskul::insert([
            'nama_eskul'=>$data_eskul['nama_eskul'],
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
     }
    }
}
