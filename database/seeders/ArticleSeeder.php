<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            // "jour" => date('d'),
            // "mois" => date('Y-m'),
            // "img" => "video.jpg",
            // "title" => "Test",
            // "categorie_id" => "1",
            // 'user_id' => '1'
        ]);
    }
}
