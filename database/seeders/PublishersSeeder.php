<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as faker;

class PublishersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i = 1; $i <=10; $i++){
            DB::table('publishers')->insert([
                'name' => $faker->name(),
                'email' => $faker->email(),
                'address' => $faker->address(),
                'logo' => 'https://pbs.twimg.com/media/CEtdkknVAAAyd1L.png',
                'phone' => $faker->phoneNumber(),
            ]);
        }
    }
}
