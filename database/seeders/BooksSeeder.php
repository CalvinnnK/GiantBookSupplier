<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as faker;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i = 1; $i <=20; $i++){
            DB::table('books')->insert([
                'book_title' => $faker->sentence(3),
                'book_author' => $faker->name(),
                'book_image' => 'https://www.writersdigest.com/.image/t_share/MTcxMDY0NzcxMzIzNTY5NDEz/image-placeholder-title.jpg',
                'year' => rand(1990,2023),
                'synopsis' => $faker->paragraphs(),
                'publisher_id' => rand(1,10)
            ]);
        }

    }
}
