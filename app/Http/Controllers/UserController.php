<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role_id = $request->role_id;
        $user->company_id = $request->company_id;
        $user->save();

        return response()->json(['message' => 'User created successfully'], 201);
    }

    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }
}
