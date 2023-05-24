<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as faker;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $genre = ['romance', 'adventure', 'horror', 'comedy', 'physcology', 'thriller', 'action'];

        for($i = 0; $i <=5; $i++){
            DB::table('categories')->insert([
                'category' => $genre[$i]
            ]);
        }
    }
}
