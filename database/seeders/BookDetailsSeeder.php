<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <=50; $i++){
            DB::table('book_details')->insert([
                'book_id' => rand(1,20),
                'category_id' => rand(1,6)
            ]);
        }
    }
}
