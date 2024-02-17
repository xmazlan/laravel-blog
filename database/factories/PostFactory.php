<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence(6);
        return [
            'user_id' => User::all()->random()->id, // mengambil id user secara random
            'image' => $this->faker->imageUrl(),
            'title' => $title,
            'slug' => \Illuminate\Support\Str::slug($title),
            'content' => $this->faker->paragraphs(3, true),
            'published_at' => $this->faker->dateTimeThisYear(),
            'featured' => $this->faker->boolean()
        ];
    }
}
