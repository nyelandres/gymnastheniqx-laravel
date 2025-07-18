<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    /** @use HasFactory<\Database\Factories\EmployeesFactory> */
    use HasFactory;

    protected $table = 'employees';

    public function role()
    {
        return $this->belongsTo(Roles::class, 'role_id');
    }
    public function account()
    {
        return $this->hasOne(User::class, 'employee_id');
    }
}
