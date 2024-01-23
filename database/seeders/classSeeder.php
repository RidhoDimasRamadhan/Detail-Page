<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\kelas;
use Carbon\Carbon;
class classSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data = [
            ['nama' => '1A'],
            ['nama' => '1B'],
            ['nama' => '1C']
        ];

        foreach($data as $nama){
        kelas::insert([
            'nama'=>$nama['nama'],
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
           ]);

        }
    }
}
