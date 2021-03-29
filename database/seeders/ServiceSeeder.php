<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'icon' => 'flaticon-023-flask',
                'title' => 'Get in the lab',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..'
            ],
            [
                'icon' => 'flaticon-011-compass',
                'title' => 'Projects online',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..'
            ],
            [
                'icon' => 'flaticon-037-idea',
                'title' => 'SMART MARKETING',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..'
            ],
            [
                'icon' => 'flaticon-039-vector',
                'title' => 'Social Media',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..'
            ],
            [
                'icon' => 'flaticon-036-brainstorming',
                'title' => 'Brainstorming',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..'
            ],
            [
                'icon' => 'flaticon-026-search',
                'title' => 'Documented',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..'
            ],
            [
                'icon' => 'flaticon-018-laptop-1',
                'title' => 'Responsive',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..'
            ],
            [
                'icon' => 'flaticon-043-sketch',
                'title' => 'Retina ready',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..'
            ],
            [
                'icon' => 'flaticon-012-cube',
                'title' => 'Ultra modern',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..'
            ],
            [
                'icon' => 'flaticon-050-satellite',
                'title' => 'test',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..'
            ],
            [
                'icon' => 'flaticon-049-projector',
                'title' => 'test 2',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..'
            ],
            [
                'icon' => 'flaticon-048-abstract',
                'title' => 'test 3',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..'
            ],
        ]);
    }
}
