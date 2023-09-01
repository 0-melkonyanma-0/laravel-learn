<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
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
        $tittle = $this->faker->unique()->word;
        return [
            //'user_id' => ,
            //'category_id' => Category::factory(),
            'slug' => Str::slug($tittle),
            'tittle' => $tittle,
            'body' =>  '<p>'.implode('</p><p>',$this->faker->paragraphs(6)).'</p>',
            'excerpt' => '<p>'.implode('</p><p>',$this->faker->paragraphs(2)).'</p>',
        ];
    }
}
