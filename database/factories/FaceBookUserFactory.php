<?php

namespace Database\Factories;

use App\Models\FaceBookUser;
use Illuminate\Database\Eloquent\Factories\Factory;

class FaceBookUserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FaceBookUser::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'country' => $this->faker->word,
        'number_of_users' => $this->faker->randomDigitNotNull,
        'active_users' => $this->faker->randomDigitNotNull,
        'none_active_users' => $this->faker->randomDigitNotNull,
        'hrs_per_day_online' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
