<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Doctor;
class AppointmentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'appointment_no' => $this->faker->unique()->randomNumber(),
            'appointment_date' => $this->faker->dateTimeBetween('now', '+1 week'),
            'doctor_id' => Doctor::inRandomOrder()->first()->id,
            'patient_name' => $this->faker->name(),
            'patient_phone' => $this->faker->phoneNumber(),
            'total_fee' => $this->faker->numberBetween(1000, 5000),
            'paid_amount' => $this->faker->numberBetween(500, 3000),
        ];
    }
}
