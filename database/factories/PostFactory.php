<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(6),
            'content' => $this->faker->paragraph(4),
            'author' => $this->faker->name,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
