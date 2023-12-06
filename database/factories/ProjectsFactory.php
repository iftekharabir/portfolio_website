<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Projects>
 */
class ProjectsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'uuid' => $this->faker->uuid,
            'category' => $this->faker->word,
            'name' => $this->faker->word,
            'description' => $this->faker->paragraph(2),
            'client' => $this->faker->word,
            'finish_date' => $this->faker->date(),
            'url' => $this->faker->url,
            'image' => 'https://picsum.photos/800/600?random='.rand(10000, 99999),
        ];
    }
}
