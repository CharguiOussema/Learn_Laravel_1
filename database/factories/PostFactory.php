<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $title = $this->faker->realText(67);
         return [
            'title' => $this->faker->realText(67),
            'slug' => Str::slug($title,'-'),
            'content' => $this->faker->text,
            'active' => $this->faker->boolean,

        ];
    }
}
