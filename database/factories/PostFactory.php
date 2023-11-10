<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{

  public function definition(): array
  {
    return [
      'title' => fake()->sentence(mt_rand(1, 6)),
      'slug' => fake()->slug(),
      'excerpt' => fake()->paragraph(),
      'body' => collect($this->faker->paragraph(mt_rand(5, 10)))->map(fn ($p) => "<p>$p</p>")->implode(''),
      'user_id' => mt_rand(1, 3),
      'category_id' => mt_rand(1, 2)
    ];
  }
}
