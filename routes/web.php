<?php

use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

// Home
Route::get('/', [ViewController::class, 'welcome'])->name('home');

// Gallery
Route::get('/galeri', [ViewController::class, 'gallery'])->name('gallery');

// Profile
Route::prefix('profil')->group(function () {
    Route::get('/', [ViewController::class, 'profileIndex'])->name('profile.index');
    Route::get('/sejarah', [ViewController::class, 'profileHistory'])->name('profile.history');
    Route::get('/struktur', [ViewController::class, 'profileStructure'])->name('profile.structure');
    Route::get('/visimisi', [ViewController::class, 'profileVisiMisi'])->name('profile.visimisi');
});

// Superiority
Route::prefix('unggulan')->group(function () {
    Route::get('/', [ViewController::class, 'superiorityIndex'])->name('superiority.index');
    Route::get('/prestasi', [ViewController::class, 'superiorityAchievement'])->name('superiority.achievement');
    Route::get('/ekstrakurikuler', [ViewController::class, 'superiorityExtracurricular'])->name('superiority.extracurricular');
    Route::get('/fasilitas', [ViewController::class, 'superiorityFacility'])->name('superiority.facility');
});

// Other Pages
Route::get('/kontak', [ViewController::class, 'contact'])->name('contact');
Route::get('/direktori/guru-dan-karyawan', [ViewController::class, 'directory'])->name('directory');
Route::get('/berita', [ViewController::class, 'news'])->name('news');
Route::get('/berita/{slug}', [ViewController::class, 'post'])->name('post');
Route::get('/ppdb', [ViewController::class, 'ppdb'])->name('ppdb');
Route::get('/kegiatan', [ViewController::class, 'kegiatan'])->name('Kegiatan');
Route::get('/pengumuman', [ViewController::class, 'pengumuman'])->name('Pengumuman');
Route::get('/fasilitas', [ViewController::class, 'fasilitas'])->name('Fasilitas');
Route::get('/blog', [ViewController::class, 'blog'])->name('Blog Guru');
Route::get('{category}/{slug}', [ViewController::class, 'post'])->name('post.show');
Route::get('{category}', [ViewController::class, 'list'])->name('list.post');
