<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

//created and coded by Andriatama Bagaskara
class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'category_id' => 1,
                'title' => 'The Hunchback of Notre-Dame'
            ],
            [
                'category_id' => 1,
                'title' => 'David Copperfield'
            ],
            [
                'category_id' => 1,
                'title' => 'The fault in our stars'
            ],
            [
                'category_id' => 2,
                'title' => 'Sophie\' world'
            ],
            [
                'category_id' => 2,
                'title' => 'The Metamorphosis'
            ],
            [
                'category_id' => 2,
                'title' => 'The Trial'
            ],
            [
                'category_id' => 3,
                'title' => 'The mystery of Blue Train'
            ],
            [
                'category_id' => 3,
                'title' => 'The Return Sherlock Holmes'
            ],
            [
                'category_id' => 3,
                'title' => 'Call of Cthulhu'
            ],
            [
                'category_id' => 3,
                'title' => 'Hamlet'
            ],

        ]);
    }
}
