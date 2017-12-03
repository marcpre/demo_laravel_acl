<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class AdminController extends Controller
{
    public function getAdminPage()
    {
        $users = User::all();
        return view('admin.users', ['users' => $users]);
    }
}
