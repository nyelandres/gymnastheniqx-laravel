<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed roles first, so role_id foreign key will work in other factories
        $this->call([
            // RolesSeeder::class,
            EmployeesSeeder::class, // if you have this already
        ]);

        // Optional user (default demo user)
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
