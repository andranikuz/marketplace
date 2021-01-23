<?php

namespace Database\Factories;

use App\Models\Ad;
use App\Models\City;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ad::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text(15),
            'category_id' => rand(1, 15),
            'city_id' => rand(1, 3605),
            'description' => $this->faker->text(500),
            'publish_date' => $this->faker->dateTimeBetween('-30 day', 'now'),
            'cost' => rand(34, 43873),
            'user_id' => rand(1, 20),
            'views_count' => rand(0, 18),
            'photos_count' => rand(0, 10),
            'status' => $this->faker->randomElement([0, 10, 50, 100, 200]),
        ];
    }
}
