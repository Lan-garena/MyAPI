<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Weather>
 */
class WeatherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'weather_name' => 'weather: '.$this->faker->word(),
            'temperature' => $this->faker->numberBetween(-30, 30),
            'wind_speed' => $this->faker->numberBetween(0, 30),
            'pressure' => $this->faker->numberBetween(760, 780),
            'humidity' => $this->faker->numberBetween(0, 100),
            'chance_of_precipitation' => $this->faker->numberBetween(0, 100),
            'city_id' => $this->faker->unique()->numberBetween(1, 20),
        ];
    }
}
