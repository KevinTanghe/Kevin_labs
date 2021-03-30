<?php

namespace Database\Seeders;

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
        $this->call([
            LogoSeeder::class,
            CarouselSeeder::class,
            ServiceSeeder::class,
            TitleSeeder::class,
            AboutContentSeeder::class,
            VideoSeeder::class,
            TestiSeeder::class,
            FonctionSeeder::class,
            RoleSeeder::class,
            SubjectSeeder::class,
            MailProSeeder::class,
            ContactSeeder::class,
            FooterSeeder::class,
            MapSeeder::class,
            CategorieSeeder::class,
            ArticleSeeder::class,
            TagSeeder::class,

        ]);
    }
}
