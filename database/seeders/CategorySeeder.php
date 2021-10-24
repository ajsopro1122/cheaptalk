<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'category' => 'Adventure', 
                'remarks' => '5'
            ],
            [
                'category' => 'Business',
                'remarks' => '5'
            ],
            [
                'category' => 'Comedy',
                'remarks' => '5'
            ],
            [
                'category' => 'Drama',
                'remarks' => '5'
            ],
            [
                'category' => 'Horror',
                'remarks' => '5'
            ],
            [
                'category' => 'Politics',
                'remarks' => '5'
            ],
            [
                'category' => 'Religion',
                'remarks' => '5'
            ],
            [
                'category' => 'Romance',
                'remarks' => '5'
            ]
        ]);
    }
}
