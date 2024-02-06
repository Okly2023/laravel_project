<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_role;

class User_roleController extends Controller
{
    public function store(Request $request)
    {
        $user_role = new User_role;
        $user_role->role_name= $request->role_name;
        $user_role->save();

        return response()->json(['message' => 'User role created successfully'], 201);
    }
    public function index()
    {
        $user_roles = User_role::all();
        return response()->json($user_roles);
    }
}
