<?php

namespace Database\Factories;

use App\Models\Amount;
use Illuminate\Database\Eloquent\Factories\Factory;

class AmountFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Amount::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'value' => $this->faker->randomElement(Amount::VALUES),
            'quantity' => $this->faker->numberBetween(0, 10)
        ];
    }
}
