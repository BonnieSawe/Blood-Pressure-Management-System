<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Support\Arr;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Patient::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender_options = ['male', 'female'];
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->e164PhoneNumber,
            'gender' => array_rand((array) $gender_options, (int) 1),
            'dob' => Carbon::parse($this->faker->dateTimeBetween('1960-01-01', '2020-12-31'))
        ];
    }
}
