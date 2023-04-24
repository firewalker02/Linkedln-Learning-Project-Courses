<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Petition>
 */
class PetitionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'        => $this->faker->word,
            'description'  => $this->faker->text(50),
            'author'       => $this->faker->name,
            'category'     => $this->faker->name,
            'signees'      => $this->faker->numberBetween(0,1000000)
            //factory to generate fake information for testing purposes
        ];
    }
}
