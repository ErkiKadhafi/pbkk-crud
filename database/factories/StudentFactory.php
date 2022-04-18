<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $major = ['science', 'social'];
        $indexMajor = random_int(0, 1);
        return [
            'name' => $this->faker->name(),
            'nisn' => $this->faker->numerify('##########'),
            'school_origin' => 'SMA ' . $this->faker->company(),
            'major' => $major[$indexMajor],
            'date_of_birth' => $this->faker->date($format = 'Y-m-d', $max = 'now')
        ];
    }
}
