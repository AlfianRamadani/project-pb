<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'image_url', 'content', 'author_id', 'published_at'];
    protected $appends = ['category_name'];
    // Relasi ke guru (author)
    public function author()
    {
        return $this->belongsTo(Teacher::class, 'author_id');
    }

    // Relasi ke comments
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // Relasi ke tags
    public function tags()
    {
        return $this->hasMany(PostTag::class);
    }
    public function getCategoryNameAttribute()
    {
        return $this->categories->first()->category_name ?? null; // Mengembalikan nama kategori pertama atau null jika tidak ada
    }


    // Relasi ke kategori jenis berita
    public function categories ()
    {
        return $this->belongsToMany(Category::class, 'post_type', 'post_id', 'category_id');
    }
}
