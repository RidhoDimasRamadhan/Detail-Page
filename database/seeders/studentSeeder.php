<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;

class studentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $data  =[
        //     ['nama'=>'ridho dimas ramadhan','gender'=>"L",'nis'=>'10120999','class_id'=>'1'],
        //     ['nama'=>'budi sudarsono','gender'=>"L",'nis'=>'10120444','class_id'=>'3'],
        //     ['nama'=>'bambang pamungkas','gender'=>"L",'nis'=>'10120111','class_id'=>'3'],
        //     ['nama'=>'syarih sidik','gender'=>"L",'nis'=>'10123333','class_id'=>'2'],
        //     ['nama'=>'puji astuti','gender'=>"P",'nis'=>'10121212','class_id'=>'2']
        // ];

        // foreach($data as $value){
        //     student::insert([
        //         'nama'=>$value['nama'],
        //         'gender'=>$value['gender'],
        //         'nis'=>$value['nis'],
        //         'class_id'=>$value['class_id'],
        //         'created_at'=>Carbon::now(),
        //         'updated_at'=>Carbon::now()
        //     ]);

        // }


        // jadi ambil student nya lalu panggil factorynya lalau ingin berapa data dengan menggunakan count(), lalu buat dengan menggunakan create()
        student::factory()->count(10)->create();
    }
}
