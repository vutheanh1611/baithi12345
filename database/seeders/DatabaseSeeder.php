<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('_book')->insert([
            [
                'id' => 1,
                'bookid' => 101,
                'authorid'=> 11,
                'title' => 'Lean PHP',
                'ISBN' => ' A06162',
                'pub_year'=> 2019,
                'available'=> 90,
            ],
            [
                'id' => 2,
                'bookid' => 102,
                'authorid'=> 99,
                'title' => 'Lean HTML',
                'ISBN' => ' A06163',
                'pub_year'=> 2022,
                'available'=> 60,
            ],
            [   'id' => 3,
                'bookid' => 103,
                'authorid'=> 30,
                'title' => 'Lean Laravel',
                'ISBN' => ' A06164',
                'pub_year'=> 2020,
                'available'=> 10,
            ],
            [   'id' => 4,
                'bookid' => 104,
                'authorid'=> 50,
                'title' => 'Lean C',
                'ISBN' => ' A06165',
                'pub_year'=> 2021,
                'available'=> 10,
            ],
            [   'id' => 5,
                'bookid' => 105,
                'authorid'=> 50,
                'title' => 'Lean Boostrap',
                'ISBN' => ' A06166',
                'pub_year'=> 2014,
                'available'=> 10,
            ],

        ]);
    }
}
