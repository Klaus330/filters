<?php

namespace Database\Factories;

use App\Models\Property;
use Illuminate\Database\Eloquent\Factories\Factory;

class PropertyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Property::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'address' => $this->faker->name(),
            'price' => $this->faker->numberBetween(200000, 1500000),
            'beds' => $this->faker->numberBetween(0, 4),
            'baths' => $this->faker->numberBetween(0, 5),
            'type' => $this->faker->numberBetween(1, 3),
            'purpose' => $this->faker->boolean(),
        ];
    }
}
