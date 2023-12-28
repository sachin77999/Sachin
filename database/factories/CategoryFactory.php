<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'status' => rand(0,1),
            'slug' => fake()->name(),
            'category_description' => fake()->name(),
            'seo_information' => fake()->name(),


        ];
    }
}
