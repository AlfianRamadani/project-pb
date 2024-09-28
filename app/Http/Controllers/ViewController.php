<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function welcome() {
        $mainPost = Post::orderBy('created_at', 'desc')->take(3)->get();
        return view('welcome')
        ->with(compact('mainPost'));
    }

    public function gallery() {
        return view('gallery');
    }

    public function profileIndex() {
        return view('profile.index');
    }

    public function profileHistory() {
        return view('profile.history');
    }

    public function profileStructure() {
        return view('profile.structure');
    }

    public function profileVisiMisi() {
        return view('profile.visimisi');
    }

    public function superiorityIndex() {
        return view('superiority.index');
    }

    public function superiorityAchievement() {
        return view('superiority.achievement');
    }

    public function superiorityExtracurricular() {
        return view('superiority.extracurricular');
    }

    public function superiorityFacility() {
        return view('superiority.facility');
    }

    public function contact() {
        return view('contact');
    }

    public function directory() {
        return view('directory');
    }

    public function galeri() {
        return view('galeri');
    }

    public function news() {
        return view('news'); // Ensure this method is added for consistency.
    }

    public function ppdb() {
        return view('ppdb');
    }
}