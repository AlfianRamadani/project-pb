<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTypeTable extends Migration
{
    public function up()
    {
        Schema::create('post_type', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_id')->constrained('posts')->onDelete('cascade'); // Relasi dengan tabel posts
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade'); // Relasi dengan tabel categories
        });
    }

    public function down()
    {
        Schema::dropIfExists('post_type');
    }
}