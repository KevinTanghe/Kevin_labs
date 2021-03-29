<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert([
            'url' => 'https://www.youtube.com/watch?v=5qap5aO4i9A',
            'img' => 'video.jpg'
        ]);
    }
}
