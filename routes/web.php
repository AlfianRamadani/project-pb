<?php
use Illuminate\Support\Facades\Route;

// Home
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Gallery
Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

// Profile
Route::prefix('profile')->group(function () {
    Route::get('/', function () {
        return view('profile.index');
    })->name('profile.index');

    Route::get('history', function () {
        return view('profile.history');
    })->name('profile.history');

    Route::get('structure', function () {
        return view('profile.structure');
    })->name('profile.structure');

    Route::get('visimisi', function () {
        return view('profile.visimisi');
    })->name('profile.visimisi');
});

// Superiority
Route::prefix('superiority')->group(function () {
    Route::get('/', function () {
        return view('superiority.index');
    })->name('superiority.index');

    Route::get('achievement', function () {
        return view('superiority.achievement');
    })->name('superiority.achievement');

    Route::get('extracurricular', function () {
        return view('superiority.extracurricular');
    })->name('superiority.extracurricular');

    Route::get('facility', function () {
        return view('superiority.facility');
    })->name('superiority.facility');
});

// Other Pages
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/directory', function () {
    return view('directory');
})->name('directory');

Route::get('/galeri', function () {
    return view('galeri');
})->name('galeri');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/ppdb', function () {
    return view('ppdb');
})->name('ppdb');
