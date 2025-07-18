<?php

namespace Database\Factories;

use App\Models\Employees;
use App\Models\Roles;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeesFactory extends Factory
{
    protected $model = Employees::class;

    public function definition(): array
    {
        return [
            'full_name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'username' => $this->faker->unique()->userName,
            'role_id' => Roles::inRandomOrder()->first()?->id, // Nullable
            'contact_number' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'date_hired' => $this->faker->date(),
            'profile_photo' => $this->faker->imageUrl(200, 200, 'people', true, 'Profile'),
            'status' => $this->faker->randomElement(['active', 'inactive']),
            'last_login_at' => $this->faker->dateTimeBetween('-1 month'),
        ];
    }
}
