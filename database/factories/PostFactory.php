<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'preview' => $this->faker->text(20),
            'description' => $this->faker->text(200),
            'thumbnail' => $this->faker->image('public/storage/posts', 640,520,null,false),
        ];
    }
}
