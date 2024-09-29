<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ViewController extends Controller
{
        public function welcome() {
            Carbon::setLocale('id');
            $mainPost = Post::with('categories')->orderBy('created_at', 'desc')->take(3)->get();
            $categories = Category::with('posts')->whereIn('category_name', ['Pengumuman', 'Blog Guru', 'Fasilitas', 'Kegiatan'])->get();

            return view('welcome')
            ->with(compact('mainPost', 'categories'));
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
        $data = Post::first();
        return view('berita')
        ->with(compact('data'));
    }
    public function post(  string $slug){
        $post = Post::where('slug', $slug)->first();
        return view('post')
        ->with(compact('post'));
    }
    public function postCategory(string $category, string $slug){
        $post = Post::where('slug', $slug)->first();
        return view('post')
        ->with(compact('post'));
    }

    public function ppdb() {
        return view('ppdb');
    }
    public function list(string $category){
        dd($category);
        $category = ucwords(str_replace('-', ' ', $category));
        $list = Category::with('posts')->where('category_name', $category)->paginate(15)->first();
        return view('listpost')
        ->with(compact('list'));
    }
}
