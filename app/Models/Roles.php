<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    /** @use HasFactory<\Database\Factories\RolesFactory> */
    use HasFactory;

    protected $table = 'roles';

    public function employees()
    {
        return $this->hasMany(Employees::class, 'role_id');
    }
}
