<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        
        return [
            'image_url' => $this->faker->image('public/images',640,480,null,false),
            'project_id' => function(){
                $factory = Factory::factoryForModel(\App\Models\Project::class);
                return $factory->create()->id;
            }
        ];
    }
}
