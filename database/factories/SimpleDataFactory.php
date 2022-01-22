<?php

namespace Database\Factories;

use App\Models\SimpleData;
use Illuminate\Database\Eloquent\Factories\Factory;

class SimpleDataFactory extends Factory
{
    protected $model = SimpleData::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->sentence(2),//,
            'data'=>$this->faker->text(200)
        ];
    }
}
