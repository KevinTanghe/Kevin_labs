<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert([
            [
                'subject' => 'Demande de Sponsor'
            ],
            [
                'subject' => 'Faire un devis'
            ],
            [
                'subject' => 'Service après vente'
            ],
            [
                'subject' => 'Autres Questions'
            ],
        ]);
    }
}
