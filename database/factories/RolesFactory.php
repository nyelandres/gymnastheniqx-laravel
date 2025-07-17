<?php

namespace Database\Factories;

use App\Models\Roles;
use Illuminate\Database\Eloquent\Factories\Factory;

class RolesFactory extends Factory
{
    protected $model = Roles::class;

    public function definition(): array
    {
        return [
            'role_name' => $this->faker->unique()->randomElement(['admin', 'staff', 'cashier', 'manager']),
        ];
    }
}
