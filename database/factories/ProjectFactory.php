<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'project_title' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'project_description' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),
            'project_url' => $this->faker->url()
        ];
    }
}
