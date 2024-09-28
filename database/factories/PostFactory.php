<?php
namespace Database\Factories;

use App\Models\Post;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class PostFactory extends Factory
{
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence;
        $slug = str::slug($title, '-');
        return [
            'title' => $title,
            'image_url' => $this->faker->imageUrl(640, 480, 'education', true, 'school'),
            'content' => $this->faker->paragraphs(3, true),
            'slug' => $slug,
            'author' => $this->faker->name('man'),
            'published_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}