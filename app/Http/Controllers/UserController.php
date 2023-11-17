<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request)
    {
        // Validate request data (you can customize validation rules)
        $request->validate([
            'fullname' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        // Create a new user
        $user = User::create([
            'fullname' => $request->input('fullname'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            // Add other user attributes as needed
        ]);

        // You can customize the response based on your requirements
        return response()->json(['message' => 'User registered successfully', 'user' => $user], 201);
    }

    // Example: User login
    public function login(Request $request)
    {
        // Implement login logic
        // ...

        // You can customize the response based on your requirements
        return response()->json(['message' => 'User logged in successfully', 'user' => $user], 200);
    }

    // Example: User profile
    public function profile(Request $request)
    {
        // Implement profile logic
        // ...

        // You can customize the response based on your requirements
        return response()->json(['user' => $user], 200);
    }
}
