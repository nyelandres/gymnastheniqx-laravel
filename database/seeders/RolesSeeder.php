<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Roles;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = ['admin', 'staff', 'cashier', 'manager'];

        foreach ($roles as $roleName) {
            Roles::firstOrCreate(['role_name' => $roleName]);
        }
    }
}
