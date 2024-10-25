<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['category_name' => 'Pengumuman'],
            ['category_name' => 'Blog Guru'],
            ['category_name' => 'Fasilitas'],
            ['category_name' => 'Kegiatan'],
            ['category_name' => 'Berita'],
            ['category_name' => 'Seragam'],
            ['category_name' => 'PPDB'],
            ['category_name' => 'Contact'],
            ['category_name' => 'Galeri Video'],
            ['category_name' => 'Galeri Foto'],
            ['category_name' => 'Prestasi'],
            ['category_name' => 'Identitas Sekolah'],
            ['category_name' => 'Visi Misi'],
            ['category_name' => 'Struktur Organisasi'],
            ['category_name' => 'Sejarah'],
            ['category_name' => 'Agenda'],
            ['category_name' => 'Carousel'],
        ]);
    }
}