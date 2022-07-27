<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected $images = ['images/1.png', 'images/2.jpg', 'images/3.png'];
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'image' => $this->images[rand(0,2)],
            'excerpt' => '<p>' . $this->faker->text(150) . '</p>',
            'content' => '<p>' . implode('</p><p>', $this->faker->paragraphs(6)) . '</p>',
            'category_id' => rand(1, 4)
        ];
    }
}
