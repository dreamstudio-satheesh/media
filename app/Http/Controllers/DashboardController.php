<?php

namespace App\Http\Controllers;


use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $roles = Role::count();
        $users = User::count();
        return view('dashboard.index', compact('roles', 'users'));
    }
}
