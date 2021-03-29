<?php

namespace Database\Factories;

use App\Models\Material\MaterialInOut;
use Illuminate\Database\Eloquent\Factories\Factory;

class MaterialInOutFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MaterialInOut::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type' => 1,
            'inner_type' => 1,
            'material_id' => sprintf('%05d', $this->faker->numberBetween($min = 10000, $max = 90000)),
            'customer_id' => sprintf('%05d', $this->faker->numberBetween($min = 10000, $max = 90000)),
            'wdate' => $this->faker->date()
        ];
    }
}
