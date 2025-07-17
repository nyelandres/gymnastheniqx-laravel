<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;

class UserManagementController extends Controller
{
    //
    public function index()
    {
        $employees = Employees::all();

        return view('settings.user-management.user-management', compact('employees'));
    }
}
