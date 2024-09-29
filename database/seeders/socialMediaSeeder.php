<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('social_media')->insert([
            [
                'name' => 'Instagram',
                'link' => 'https://www.instagram.com/yourusername', // Replace with your link
            ],
            [
                'name' => 'Twitter',
                'link' => 'https://twitter.com/yourusername', // Replace with your link
            ],
            [
                'name' => 'Facebook',
                'link' => 'https://www.facebook.com/yourusername', // Replace with your link
            ],
            [
                'name' => 'Telegram',
                'link' => 'https://t.me/yourusername', // Replace with your link
            ],
        ]);
    }
}
