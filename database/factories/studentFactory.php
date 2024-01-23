<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as faker;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\student>
 */
class studentFactory extends Factory
{
    /**
     * Define the model's default state.
     * 
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        // langkah pertama dalam pembuatan faker ini adlaah pembuaatan kerangak terlebihh dahulu sama seperti dengan migratuin begitu pun di factory  ini , jadi buat kerangak yang sudah ada dan sudah dibuat sebelumnya dengan menggunakan migaration,  buat facttory ini yang pertama download composer berupa composer require faker/faker, allau milih yang dev,

        // 
        $faker = faker::create();
        return [
            'nama'=>$faker->name(),
            'gender'=>Arr::random(['L','P']),
            'nis'=>mt_srand(00000001,1111111),
            'class_id'=>Arr::random(1,2,3,4),
        ];
    }
}
