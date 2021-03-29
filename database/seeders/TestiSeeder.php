<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testis')->insert([
            [
                "img" => "01.jpg",
                "name" => "Michael Smith",
                "function" => "CEO Company",
                "content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa."
            ],
            [
                "img" => "02.jpg",
                "name" => "Michael Smith",
                "function" => "CEO Company",
                "content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa."
            ],
            [
                "img" => "03.jpg",
                "name" => "Michael Smith",
                "function" => "CEO Company",
                "content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa."
            ],
            [
                "img" => "01.jpg",
                "name" => "Michael Smith",
                "function" => "CEO Company",
                "content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa."
            ],
            [
                "img" => "02.jpg",
                "name" => "Michael Smith",
                "function" => "CEO Company",
                "content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa."
            ],
            [
                "img" => "03.jpg",
                "name" => "Michael Smith",
                "function" => "CEO Company",
                "content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa."
            ],
        ]);
    }
}
