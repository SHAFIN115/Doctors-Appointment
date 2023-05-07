<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Department;
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $departmentId = 1;
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'phone' => $this->faker->phoneNumber(),
            'fee' => $this->faker->numberBetween(50, 200),
            'department_id' => function () {
                return Department::create([
                    'name' => $this->faker->word()
                ])->id;
            }
        ];
    }
}
