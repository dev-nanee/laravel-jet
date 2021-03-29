<?php

namespace Database\Factories;

use App\Models\Material\Material;
use Illuminate\Database\Eloquent\Factories\Factory;

class MaterialFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Material::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => sprintf('%05d',$this->faker->numberBetween($min = 10000, $max = 90000)),
            'type' => sprintf('%05d',$this->faker->numberBetween($min = 10000, $max = 90000)),
            'name' => $this->faker->numerify('자재 ###'), // '자재 609'
            'model_code' => sprintf('%05d',$this->faker->numberBetween($min = 10000, $max = 90000)),
            'color' => $this->faker->colorName,
            'unit_code' =>sprintf('%05d',$this->faker->numberBetween($min = 10000, $max = 90000)),
            'unit_qty' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 1000)
        ];
    }
}
