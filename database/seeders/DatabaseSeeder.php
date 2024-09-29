<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Menjalankan factory untuk membuat 10 post
        \App\Models\Post::factory(10)->create();

        // Menjalankan seeder CategorySeeder
        $this->call([
            CategorySeeder::class,
            SocialMediaSeeder::class

        ]);
    }
}
