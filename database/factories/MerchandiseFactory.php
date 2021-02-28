<?php

namespace Database\Factories;

use App\Models\Merchandise;
use Illuminate\Database\Eloquent\Factories\Factory;

class MerchandiseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Merchandise::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(3),
            'image' => 'https://picsum.photos/200/200',
            'description' => $this->faker->paragraph(7),
            'price' => $this->faker->numberBetween(10000, 100000),
            'merchandise_category_id' => $this->faker->numberBetween(1, 6),
        ];
    }
}
