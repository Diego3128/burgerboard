<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Throwable;

class AuthController extends Controller
{
    public function register(RegisterUserRequest $request)
    {
        try {
            $data = $request->validated();
            // create and send token back to the client
            $newUser = User::create($data);
            $token = $newUser->createToken('API_REGISTRATION');

            return response()->json([
                "success" => true,
                "message" => "User registered",
                "token" => $token->plainTextToken,
                "user" => $newUser
            ], 201);
        } catch (Throwable $e) {
            return response()->json([
                "success" => false,
                "message" => "User could not be registered",
                "error" => $e
            ], 501);
        }
    }

    public function login(LoginUserRequest $request)
    {
        try {
            $data = $request->validated();
            // compare hashed and given password
            $user = User::where('email', $data['email'])->first();

            if (!$user || !Hash::check($data['password'], $user->password)) {
                return response()->json([
                    "success" => false,
                    "message" => "Wrong credentials",
                ], 401);
            }
            // generate token
            $token = $user->createToken('API_LOGIN');
            return response()->json([
                "success" => true,
                "message" => "User logged in",
                "token" => $token->plainTextToken,
                "user" => $user
            ]);
        } catch (Throwable $e) {
            Log::error('Login failed', ['exception' => $e]);
            return response()->json([
                "success" => false,
                "message" => "User could not be logged in",
            ], 500);
        }
    }
    public function logout(Request $request)
    {
        try {
            $user = $request->user();

            if (!$user || !$user->currentAccessToken()) {
                return response()->json([
                    "success" => false,
                    "message" => "No active session or user found.",
                ], 400);
            }
            $user->currentAccessToken()->delete();
            return response()->json([
                "success" => true,
                "message" => "User logged out.",
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "success" => false,
                "message" => "User could not be logged out. ",
            ], 500);
        }
    }
}
