<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

//created and coded by Andriatama Bagaskara
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
            'category' => 'Romance',
        ]);

        DB::table('categories')->insert([
            'category' => 'Psychological'
        ]);

        DB::table('categories')->insert([
            'category' => 'Mystery'
        ]);
    }
}
