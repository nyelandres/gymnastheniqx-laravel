<?php

namespace App\Services;

use App\Models\Employees;
use App\Models\Roles;

class EmployeeService
{

    public function get_auth_employees($email)
    {
        return Employees::where('email', $email);
    }
}
