<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fullName' => $this->faker->name,
            'birthday' => $this->faker->unixTime,
            'email' => $this->faker->unique()->safeEmail,
            'job' => $this->faker->jobTitle,
            'avatar' => $this->faker->imageUrl(300,300),
            'facebook' => $this->faker->unique()->url,
            'gender' => rand(1,2),
            'country' => $this->faker->country,
            'phoneNumber' => $this->faker->unique()->phoneNumber,
            'role' => 2,
            'status' => 1,
            'created_at' => now(),
        ];
    }
}
